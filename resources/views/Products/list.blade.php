<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h1>Products List</h1>
    
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['category'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" style="text-align: center;">No products found</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 20px;">
        <h2>Tasks</h2>
        <ul>
            @foreach($tasks as $task)
                <li>{{ $task }}</li>
            @endforeach
        </ul>
    </div>

    <p>Product Key: {{ $productKey }}</p>
</body>
</html>
