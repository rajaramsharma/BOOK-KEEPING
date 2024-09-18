<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKKEEPING Web Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        h1 {
            font-size: 2.5em;
        }
        h2 {
            font-size: 1.8em;
            margin-bottom: 20px;
        }
        p {
            line-height: 1.6;
            color: #666;
        }
        ul {
            margin: 10px 0;
            padding: 0;
            list-style: none;
        }
        ul li {
            background-color: #e7f1ff;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            color: #333;
        }
        code {
            background-color: #f4f4f4;
            padding: 2px 6px;
            border-radius: 4px;
        }
        pre {
            background-color: #272822;
            color: #fff;
            padding: 10px;
            border-radius: 6px;
            overflow-x: auto;
        }
        .contributors {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .contributors div {
            background-color: #e7f1ff;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            flex: 1;
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>BOOKKEEPING Web Application</h1>

        <p><strong>BOOKKEEPING</strong> is a web application designed to efficiently record and manage customer credit balances. The goal of this project is to streamline the process of settling customer debts compared to traditional methods. This web-based solution enables quick and easy customer searches and settlements, while also providing monthly credit summaries in a graphical format.</p>

        <h2>Features</h2>
        <ul>
            <li><strong>Record Credit Balances:</strong> Easily keep track of customers' credit balances in real-time.</li>
            <li><strong>Search Customer:</strong> Users can search for customers by various identifiers such as phone number, name, or other relevant details.</li>
            <li><strong>Quick Settlement:</strong> Allows for quick and efficient settlement of credit balances, reducing the time it takes compared to manual/traditional approaches.</li>
            <li><strong>Monthly Credit Overview:</strong> View customer credit data in a graphical format to analyze trends over a specific time period.</li>
            <li><strong>User-friendly Interface:</strong> Simplistic and intuitive design using HTML, CSS, and JavaScript for the front-end.</li>
        </ul>

        <h2>Technology Stack</h2>
        <ul>
            <li><strong>Front-end:</strong> HTML, CSS, JavaScript</li>
            <li><strong>Back-end:</strong> PHP (for managing the server-side logic and database interactions)</li>
        </ul>

        <h2>How to Use</h2>
        <ul>
            <li><strong>Search for Customer:</strong> Use the search bar to find a customer by phone number, name, or other identifiers.</li>
            <li><strong>View Credit Balance:</strong> See the current outstanding credit for the selected customer.</li>
            <li><strong>Settle Balance:</strong> Settle the credit balance quickly and efficiently using the settlement button.</li>
            <li><strong>Monthly Credit Summary:</strong> View a graph that shows the credit balance trends over a month to better understand the customer's payment history.</li>
        </ul>

        <h2>Project Contributors</h2>
        <div class="contributors">
            <div>Rajaram Sharma</div>
            <div>Archana Kumari Sah</div>
            <div>Dharmendra Kumar Mandal</div>
            <div>Dev Narayan Sah</div>
        </div>

        <h2>Installation Instructions</h2>
        <p>1. Clone the repository:</p>
        <pre><code>git clone https://github.com/your-repo/BOOKKEEPING.git</code></pre>
        <p>2. Install necessary dependencies.</p>
        <p>3. Set up your PHP environment and database.</p>
        <p>4. Run the application on your local server.</p>

        <h2>Future Enhancements</h2>
        <ul>
            <li>Adding more detailed customer analysis.</li>
            <li>Expanding search functionalities to include more filters.</li>
            <li>Incorporating secure login for multiple users.</li>
        </ul>
    </div>
</body>
</html>
