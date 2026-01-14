function add() {
    fetch('db-insert.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
            task: document.getElementById('task').value
        })
    });

    document.getElementById('task').value = '';
}
