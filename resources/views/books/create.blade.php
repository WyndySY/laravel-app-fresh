<x-layout title="Add Book">
    <div class="max-w-2xl mx-auto p-8">
        <h1 class="text-3xl font-bold text-white mb-6">Add New Book</h1>

        <form method="POST" action="/books" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <input type="text" name="title" placeholder="Title" class="w-full p-3 rounded-lg bg-white/10 text-white border border-white/20">
            <input type="text" name="author" placeholder="Author" class="w-full p-3 rounded-lg bg-white/10 text-white border border-white/20">
            <textarea name="description" placeholder="Description" class="w-full p-3 rounded-lg bg-white/10 text-white border border-white/20"></textarea>

            <select name="genre" class="w-full p-3 rounded-lg bg-white/10 text-black border border-white/20">
                <option value="">Select Genre</option>
                <option value="Fiction">Fiction</option>
                <option value="Sci-Fi">Sci-Fi</option>
                <option value="Non-Fiction">Non-Fiction</option>
                <option value="Fantasy">Fantasy</option>
            </select>

            <input type="number" name="published_year" placeholder="Published Year" class="w-full p-3 rounded-lg bg-white/10 text-white border border-white/20">
            <input type="text" name="isbn" placeholder="ISBN" class="w-full p-3 rounded-lg bg-white/10 text-white border border-white/20">
            <input type="number" name="pages" placeholder="Number of Pages" class="w-full p-3 rounded-lg bg-white/10 text-white border border-white/20">
            <input type="text" name="language" placeholder="Language" class="w-full p-3 rounded-lg bg-white/10 text-white border border-white/20">
            <input type="text" name="publisher" placeholder="Publisher" class="w-full p-3 rounded-lg bg-white/10 text-white border border-white/20">
            <input type="number" step="0.01" name="price" placeholder="Price" class="w-full p-3 rounded-lg bg-white/10 text-white border border-white/20">
            <input type="file" name="cover_image" class="w-full p-3 rounded-lg bg-white/10 text-white border border-white/20">

            <label class="flex items-center gap-2 text-white">
                <input type="checkbox" name="is_available" value="1"> Available
            </label>

            <button type="submit" class="bg-yellow-400 text-black font-bold px-6 py-3 rounded-lg">Save Book</button>
        </form>
    </div>
</x-layout>