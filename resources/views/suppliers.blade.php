

@include('layouts.app')
        <div id="suppliers_tables_container">
            <a id="add_supplier_button" href="/suppliers/add">Add Supplier</a>
            <table>
                <tr>
                    <th>Supplier Name</th>
                </tr>
                @foreach ($suppliers as $supplier)
                <tr>
                    <td><a href="/suppliers/view/{{ $supplier->id }}">{{ $supplier->name }}</a></td>
                </tr>
                @endforeach
            </table>

            
        </div>
    
</body>
</html>