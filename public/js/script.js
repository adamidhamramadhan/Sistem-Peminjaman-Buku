document.getElementById('addBookForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const title = document.getElementById('title').value;
    const author = document.getElementById('author').value;
    const genre = document.getElementById('genre').value;

    const tableBody = document.querySelector('#books tbody');
    const newRow = document.createElement('tr');
    
    newRow.innerHTML = `
        <td>Auto-generated ID</td>
        <td>${title}</td>
        <td>${author}</td>
        <td>${genre}</td>
        <td><button>Hapus</button></td>
    `;
    
    tableBody.appendChild(newRow);

    document.getElementById('addBookForm').reset();
});
