@include('layouts.app')
<main>     
    <ul id="nav_links">
        <li><a href="{{ url('/users') }}">Users</a></li>
        <li><a href="{{ url('/suppliers') }}">Suppliers</a></li>
        <li><a href="{{ url('/products') }}">Products</a></li>
        <li><a href="{{ url('/orders') }}">Orders</a></li>
        <li><a href="{{ url('/sales') }}">Sales</a></li>
        <li><a href="{{ url('/vouchers') }}">Vouchers</a></li>
    </ul>

    <div id="tables_container">
        <table>
            <caption> List ToDo Sales</caption>
            <tr>
                <th>Date creation</th>
                <th>Date Validation</th>
                <th>Statut</th>
            </tr>
            <tr>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
            </tr>
            <tr>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
            </tr>
        </table>

        <table>
            <caption> Last Orders</caption>
            <tr>
                <th>Supplier</th>
                <th>Date creation</th>
                <th>Date Delivery</th>
                <th>Total price</th>
            </tr>
            <tr>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
            </tr>
            <tr>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
            </tr>
        </table>
    </div>
</main>