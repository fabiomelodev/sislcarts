@if(!$this->collections()->isEmpty())
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    @foreach($this->headings() as $heading)
                        <th>{{ $heading }}</th>
                    @endforeach
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($this->collections() as $collection)
                    <tr>
                        <td>
                            {{ $collection->name }}
                        </td>

                        <td>
                            {{ $collection->contact_type }}
                        </td>

                        <td>
                            {{ $collection->budgets()->count() }}
                        </td>

                        <td>
                            {{ $collection->created_at->format('d/m/Y') }}
                        </td>

                        </td>

                        <td class="flex justify-end gap-4">
                            <x-table.button-edit :record="$collection" route="customer.edit" />

                            <livewire:button-delete :record="$collection" :key="$collection->id"/>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <x-not-found-collections title="{{ static::$single }}"/>
@endif
