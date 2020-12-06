var shoppingCart = [];//array declare here
function display() {
    var o_product_table = document.getElementById("o_product_table")
    while (o_product_table.rows.length > 0) {
        o_product_table.deleteRow(0);
    }
    var total_price = 0;
    for (var product in shoppingCart) {
        var row = o_product_table.insertRow();
        var cellName = row.insertCell(0);
        var cellDescription = row.insertCell(1);
        var cellPrice = row.insertCell(2);
        cellPrice.align = "right";
        cellName.innerHTML = shoppingCart[product].Name;
        cellDescription.innerHTML = shoppingCart[product].Description;
        cellPrice.innerHTML = shoppingCart[product].Price;
        total_price += shoppingCart[product].Price;
    }
    document.getElementById("cart_total").innerHTML = "Total Price is: " + total_price.toString();
}


function Cart(name, description, price) {
    var Product = {};
    Product.Name = name;
    Product.Description = description;
    Product.Price = price;
    shoppingCart.push(Product);
    display();
}