<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                @foreach($headings as $heading)
                    <th>{{ $heading }}</th>
                @endforeach
                {{-- <th>Contato por</th>
                <th>Encomenda(s)</th>
                <th>Criado em</th> --}}
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($collections as $collection)
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
                        <x-table.button-edit :record="$collection" route="{{ $routeEdit }}" />

                        <x-table.button-delete :record="$collection" route="{{ $routeDestroy }}" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
