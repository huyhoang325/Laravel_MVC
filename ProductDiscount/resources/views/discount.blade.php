<!DOCTYPE html>
<html>
<head>
	<title>Discount Amount</title>
</head>
<body>
	<h1>Discount Amount</h1>

	<p>Mô tả sản phẩm: {{ $ProductDescription }}</p>
	<p>Giá:	 {{ $ListPrice }} $</p>
	<p>Chiết khấu: {{ $DiscountPercent }} % </p>
	<p>Lượng chiết khấu: {{ $DiscountAmount }} $ </p>
	<p>Giá sau chiết khấu: {{ $DiscountPrice}} $</p>

</body>
</html>