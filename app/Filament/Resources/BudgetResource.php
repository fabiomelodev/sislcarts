<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BudgetResource\Pages;
use App\Filament\Resources\BudgetResource\RelationManagers;
use App\Models\Budget;
use App\Models\Customer;
use Exception;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action as ActionsAction;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Set;
use Filament\Notifications\Notification;

class BudgetResource extends Resource
{
    protected static ?string $model = Budget::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Wizard::make([
                    Wizard\Step::make('Dados')
                        ->schema([
                            // TextInput::make('phone')
                            //     ->label('Telefone')
                            //     ->suffixAction(
                            //         ActionsAction::make('search')
                            //             ->icon('heroicon-o-magnifying-glass')
                            //             ->action(function (Set $set, $state) {
                            //                 if (blank($state)) {
                            //                     Notification::make()
                            //                         ->title('Postal Code is required')
                            //                         ->danger()->send();
                            //                     return;
                            //                 }

                            //                 try {
                            //                     $customer = Customer::where('phone', $state)->first();

                            //                     if ($customer == null) {
                            //                         throw new Exception('Cliente não encontrado!');
                            //                     }
                            //                 } catch (Exception $e) {
                            //                     Notification::make()
                            //                         ->title('Cliente não encontrado!')
                            //                         ->danger()->send();
                            //                 }

                            //                 $set('client_name', $customer->name);
                            //             })
                            //     ),
                            // TextInput::make('client_name')
                            //     ->label('Cliente')
                            Select::make('customer_id')
                                ->label('Cliente')
                                ->relationship('customer', 'name')
                        ]),
                    Wizard\Step::make('Serviço')
                        ->schema([
                            Select::make('type_budget')
                                ->label('Tipo de orçamento')
                                ->options([
                                    'valor_fechado' => 'Valor fechado',
                                    'por_hora'      => 'Por hora'
                                ]),
                            TextInput::make('value')
                                ->label('Valor fechado')
                                ->prefix('R$'),
                            TextInput::make('per_hour')
                                ->label('Por hora')
                                ->prefix('R$'),
                            Select::make('type_service')
                                ->label('Tipo de serviço')
                                ->options([
                                    'valor_fechado' => 'Valor fechado',
                                    'por_hora'      => 'Por hora'
                                ]),
                            Section::make('Bastidor')
                                ->schema([
                                    Select::make('type_budget')
                                        ->label('Tipo de orçamento')
                                        ->options([
                                            'valor_fechado' => 'Valor fechado',
                                            'por_hora'      => 'Por hora'
                                        ]),
                                ])


                        ]),
                    Wizard\Step::make('Orçamento')
                        ->schema([
                            // ...
                        ]),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBudgets::route('/'),
            'create' => Pages\CreateBudget::route('/create'),
            'edit' => Pages\EditBudget::route('/{record}/edit'),
        ];
    }
}
