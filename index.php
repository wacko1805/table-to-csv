<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Table to CSV</title>
    </head>
    <body>
        <header>
            <h1>Table to CSV</h1>
        </header>
        <main>
        <form action="tables.php" method="get">
            <input type="text" name="link" placeholder="Paste Link Here">
            <div class="buttonHolder">
            <input type="submit">
            </div>
        </form>
        <div class="box">
            <h3>How to use:</h3>
            <p>
                Place any link to any website with any html tables in it, and (hopefully) it should display all the tables on the page where you can download the table in CSV format. View the source code on <a href="https://github.com/wacko1805/table-to-csv">Github</a>
            </p>
        </div>
        </main>
    </body>
</html>