<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Overview</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Product Overview</h1>
        @if($products->isEmpty())
            <p class="text-red-500">No products found</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($products as $product)
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
                        <p class="text-gray-700">{{ $product->description }}</p>
                        <p class="text-green-500 font-bold">{{ $product->price }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>
