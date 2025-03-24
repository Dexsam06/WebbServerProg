<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartSida</title>
    <style>
    /* Style the container */
    section {
        width: 100%;
        height: auto;  /* Let the section grow with content */
        margin: 5rem 0;
        padding: 2rem;
        background-color: #f4f4f4;
        display: flex;
        flex-direction: column;  /* Stack content vertically */
        justify-content: center;
        align-items: center;
        border-radius: 1rem;  /* Optional: rounded corners for section */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);  /* Optional: light shadow around section */
    }

    /* Style the link */
    section a {
        text-decoration: none;
        color: #007bff;
        font-size: 2rem;
        padding: 1rem 2rem;
        border: 0.2rem solid #007bff;
        border-radius: 0.5rem;
        margin-bottom: 2rem; /* Space between the link and the list */
        transition: background-color 0.3s, color 0.3s;
    }

    /* Hover effect for the link */
    section a:hover {
        background-color: #007bff;
        color: white;
    }

    /* Style the paragraph */
    section p {
        font-size: 1.5rem; /* Slightly larger font size for paragraph */
        color: #333;  /* Dark text color for readability */
        text-align: center; /* Center-align the text */
        max-width: 800px;  /* Limit the width of the text */
        margin: 0 auto;  /* Center the paragraph */
    }

    /* Style the unordered list */
    section ul {
        list-style-type: none; /* Remove default bullets */
        padding: 0;
    }

    /* Style each list item */
    section ul li {
        font-size: 1.4rem; /* Slightly smaller font for list items */
        color: #555;  /* Darker gray for the list items */
        margin-bottom: 0.8rem;  /* Space between list items */
    }

    /* Optional: Style for ordered lists */
    section ul li::before {
        content: "• "; /* Custom bullet style */
        color: #007bff; /* Blue color for the bullet */
        font-size: 1.5rem; /* Make the bullet slightly larger */
    }
</style>
</head>
<body>
    <a href="Moment-0/index.php">Moment-0</a>
    <a href="Moment-1/index.php">Moment-1</a>
    <a href="Moment-2/index.php">Moment-2</a>
    <a href="Moment-3&4/index.php">Moment-3&4</a>
    <a href="Moment-5/index.php">Moment-5</a>

    <section>
        <a href="../downloads/Rocket_Racer_Client_Deploy.zip" download> Ladda ner Rocket Racer</a>
        <p>Hur man startar spelet:
            <ul>
                <li>Steg 1: Ladda ner spelet och packa upp det</li>
                <li>Steg 2: Höger klicka på filen och öppna den i terminalen</li>
                <li>Steg 3: Skriv i terminalen ./start.sh</li>
                <li>Steg 4: IP-Addressen är 172.17.50.104</li>
                <li>Steg 5: Skriv ditt namn och så är du klar, hoppas du tycker om det!</li>
            </ul>
        </p>
    </section>
   
  
</body> 
</html> 