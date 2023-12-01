<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            
        }

        main {
            display: grid;
            grid-template-columns: 1fr 3fr;
            grid-gap: 20px;
            padding: 20px;
        }

        aside {
            background-color: #f4f4f4;
            padding: 10px;
        }

        section {
            width: 100%;
        }

        section div {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 5px;
        }

        section div:nth-child(odd) {
            background-color: #f2f2f2;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        
        .b1, .b2{
            background-color: green;
            height: 40px;
            width: 200px;
            margin: 12px;
        }
        .nav{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

    </style>
</head>

<body>
    <header class="nav">
        <h1 class="playlistName">Playlist Name</h1>

        <button class="b1">Edit Playlist</button>
        <button class="b2">New Playlist</button>
    </header>

    <main>
        <aside>
            <h2>Saved Playlists</h2>
            <ul>
                <li>Playlist 1</li>
                <li>Playlist 2</li>
                <li>Playlist 3</li>
                <li>Playlist 4</li>
            </ul>
        </aside>

        <section>
            <div>
                <div>Serial No</div>
                <div>Song name</div>
                <div>Artist name</div>
                <div>Album Name</div>
                <div>Duration</div>
            </div>
            <div>
                <div>1</div>
                <div>Cineraria</div>
                <div>KK</div>
                <div>Humsafar</div>
                <div>6:55</div>
            </div>
            <div>
                <div>2</div>
                <div>Skyfall</div>
                <div>Adele</div>
                <div>Skyfall</div>
                <div>4:49</div>
            </div>
            <div>
                <div>3</div>
                <div>Waves</div>
                <div>Imagine Dragons</div>
                <div>Mercury-Act 2</div>
                <div>3:47</div>
            </div>
            
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Playlist App | <a href="#">About</a> | <a href="#">Contact</a></p>
    </footer>
</body>

</html>