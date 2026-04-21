<x-layout title="Books">
    <div class="p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-white">Book Management</h1>
            <a href="/books/create" class="bg-yellow-400 text-black px-4 py-2 rounded-lg font-bold">+ Add Book</a>
        </div>

        <div class="flex gap-4 mb-6">
            <input type="text" id="search" value="{{ request('search') }}"
                placeholder="Search by title or author..."
                class="px-4 py-2 rounded-lg bg-white/10 text-white border border-white/20 w-64">

            <select id="genre" class="px-4 py-2 rounded-lg bg-white/10 text-white border border-white/20">
                <option value="">All Genres</option>
                <option value="Fiction"      {{ request('genre') == 'Fiction'      ? 'selected' : '' }}>Fiction</option>
                <option value="Sci-Fi"       {{ request('genre') == 'Sci-Fi'       ? 'selected' : '' }}>Sci-Fi</option>
                <option value="Non-Fiction"  {{ request('genre') == 'Non-Fiction'  ? 'selected' : '' }}>Non-Fiction</option>
                <option value="Fantasy"      {{ request('genre') == 'Fantasy'      ? 'selected' : '' }}>Fantasy</option>
            </select>
        </div>

        <table class="w-full text-white border border-white/10 rounded-xl overflow-hidden">
            <thead class="bg-white/10">
                <tr>
                    <th class="p-3 text-left">Title</th>
                    <th class="p-3 text-left">Author</th>
                    <th class="p-3 text-left">Genre</th>
                    <th class="p-3 text-left">Price</th>
                    <th class="p-3 text-left">Available</th>
                    <th class="p-3 text-left">Actions</th>
                </tr>
            </thead>
            <tbody id="books-table-body">
                @foreach($books as $book)
                <tr class="border-t border-white/10">
                    <td class="p-3">{{ $book->title }}</td>
                    <td class="p-3">{{ $book->author }}</td>
                    <td class="p-3">{{ $book->genre }}</td>
                    <td class="p-3">₱{{ $book->price }}</td>
                    <td class="p-3">{{ $book->is_available ? 'Yes' : 'No' }}</td>
                    <td class="p-3 flex gap-2">
                        <a href="/books/{{ $book->id }}" class="bg-blue-500 px-3 py-1 rounded text-sm">View</a>
                        <a href="/books/{{ $book->id }}/edit" class="bg-yellow-400 text-black px-3 py-1 rounded text-sm">Edit</a>
                        <form method="POST" action="/books/{{ $book->id }}">
                            @csrf @method('DELETE')
                            <button class="bg-red-500 px-3 py-1 rounded text-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        const searchInput = document.getElementById('search');
        const genreSelect = document.getElementById('genre');
        const tableBody  = document.getElementById('books-table-body');
        let debounceTimer;

        function fetchBooks() {
            const search = searchInput.value;
            const genre  = genreSelect.value;

            fetch(`/books?search=${encodeURIComponent(search)}&genre=${encodeURIComponent(genre)}`, {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(res => res.json())
            .then(books => {
                if (books.length === 0) {
                    tableBody.innerHTML = `
                        <tr>
                            <td colspan="6" class="p-6 text-center text-white/50">No books found.</td>
                        </tr>`;
                    return;
                }

                tableBody.innerHTML = books.map(book => `
                    <tr class="border-t border-white/10">
                        <td class="p-3">${book.title}</td>
                        <td class="p-3">${book.author}</td>
                        <td class="p-3">${book.genre}</td>
                        <td class="p-3">₱${book.price}</td>
                        <td class="p-3">${book.is_available ? 'Yes' : 'No'}</td>
                        <td class="p-3 flex gap-2">
                            <a href="/books/${book.id}" class="bg-blue-500 px-3 py-1 rounded text-sm">View</a>
                            <a href="/books/${book.id}/edit" class="bg-yellow-400 text-black px-3 py-1 rounded text-sm">Edit</a>
                            <form method="POST" action="/books/${book.id}">
                                @csrf @method('DELETE')
                                <button class="bg-red-500 px-3 py-1 rounded text-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                `).join('');
            });
        }

        searchInput.addEventListener('input', () => {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(fetchBooks, 300);
        });

        genreSelect.addEventListener('change', fetchBooks);
    </script>
</x-layout>