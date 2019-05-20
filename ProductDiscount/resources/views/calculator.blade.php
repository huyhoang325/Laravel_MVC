<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/caculator.css" />
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/01EE5D29-74DE-B246-A4A0-155B6EC10625/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/83EBACC0-573F-314B-944B-CD416C68A693/abn/main.css"/></head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <form method="post" action="/">
        @csrf
        <div id="data">
            <label>Product Description:</label>
            <input type="text" name="description"/><br/>
            <label>List Price:</label>
            <input type="text" name="price"/><br/>
            <label>Discount Percent:</label>
            <input type="text" name="percent"/>(%)<br/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate Discount"/>
        </div>
    </form>
</div>
</body>
</html>

