<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Session</title>
</head>
<body>
    <button id="newSessionBtn">Start New Session</button>

    <script>
        document.getElementById('newSessionBtn').addEventListener('click', function() {
            // Close previous session
            fetch('/close-previous-session', {
                method: 'post',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' 
                },
                body: JSON.stringify({}),
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Failed to close previous session');
                }
                return response.json();
            })
            .then(data => {
                alert(data.message); // Show response message
                // Close current window/tab
                window.close();
            })
            .catch(error => {
                console.error('Error:', error.message);
                alert('Failed to close previous session');
            });
        });
    </script>
</body>
</html>
