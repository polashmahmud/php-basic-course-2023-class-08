<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Photo Gallery</title>
    <style>
        /* Add a style tag for custom styles */
        .delete-button {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-200 p-6">

<div class="max-w-2xl mx-auto bg-white p-8 border rounded-md shadow-md">

    <h2 class="text-2xl font-semibold mb-4">Photo Gallery</h2>

    <!-- Image Upload Form -->
    <form action="#" method="post" enctype="multipart/form-data" class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-600">Upload Image</label>
        <input type="file" id="image" name="image" accept="image/*" class="mt-1 p-2 w-full border rounded-md">
        <button type="submit" class="mt-2 bg-indigo-600 text-white p-2 rounded-md">Upload</button>
    </form>

    <!-- Display Uploaded Images -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Replace the following URLs with actual image URLs -->
        <div class="border p-4 rounded-md hover:shadow-md">
            <img src="https://via.placeholder.com/300" alt="Placeholder" class="w-full h-32 object-cover rounded-md">
            <button class="text-xs text-red-500 mt-3">Delete</button>
        </div>
        <div class="border p-4 rounded-md hover:shadow-md">
            <img src="https://via.placeholder.com/300" alt="Placeholder" class="w-full h-32 object-cover rounded-md">
            <button class="text-xs text-red-500 mt-3">Delete</button>
        </div>
        <div class="border p-4 rounded-md hover:shadow-md">
            <img src="https://via.placeholder.com/300" alt="Placeholder" class="w-full h-32 object-cover rounded-md">
            <button class="text-xs text-red-500 mt-3">Delete</button>
        </div>
        <div class="border p-4 rounded-md hover:shadow-md">
            <img src="https://via.placeholder.com/300" alt="Placeholder" class="w-full h-32 object-cover rounded-md">
            <button class="text-xs text-red-500 mt-3">Delete</button>
        </div>
        <div class="border p-4 rounded-md hover:shadow-md">
            <img src="https://via.placeholder.com/300" alt="Placeholder" class="w-full h-32 object-cover rounded-md">
            <button class="text-xs text-red-500 mt-3">Delete</button>
        </div>
        <div class="border p-4 rounded-md hover:shadow-md">
            <img src="https://via.placeholder.com/300" alt="Placeholder" class="w-full h-32 object-cover rounded-md">
            <button class="text-xs text-red-500 mt-3">Delete</button>
        </div>
        <!-- Add more image cards as needed -->
    </div>

</div>

</body>
</html>
