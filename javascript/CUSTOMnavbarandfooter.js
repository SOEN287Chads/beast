let navbar =
	'<nav>\
<ul class="navbar">\
    <li><a href="../php/home.php">HOME</a></li>\
    <li><a href="../php/about.php">ABOUT</a></li>\
    <li><a href="../html/product_page.php">PRODUCTS</a></li>\
    <li><a href="../php/about.php">CONTACT</a></li>\
</ul>\
</nav>';

let footer =
	'<table class="footerTable">\
    <tr>\
        <td id="footerHead">\
            <h3>Visit Us:</h3>\
        </td>\
        <td id="footerHead">\
            <h3>Find Us:</h3>\
        </td>\
        <td id="footerHead">\
            <h3>Developed By:</h3>\
        </td>\
        <td id="footerHead">\
            <h3>Group Members:</h3>\
        </td>\
        <td></td>\
        <td></td>\
    </tr>\
    <tr>\
        <td>EV S2, 1515 Rue Sainte-Catherine</td>\
        <td><a href="mailto:genericemail.com">Email</a></td>\
        <td>SOEN 287 Chads</td>\
        <td>Michael Djabauri (40158792)</td>\
        <td>Vaansh Lakhwara (40114764)</td>\
        <td>Tran Nhu Tran (40086678)</td>\
        <td></td>\
    </tr>\
    <tr>\
        <td>O#206, Montréal, QC H3G 2W1, Canada</td>\
        <td><a href="https://github.com/SOEN287Chads/beast">GitHub</a></td>\
        <td>This is a fictional site.</td>\
        <td>Gabriel Martinica (40120255)</td>\
        <td>Vatsa Shah (40125107)</td>\
        <td>Thong Minh Tran (40072745)</td>\
        <td></td>\
    </tr>\
</table>';

document.getElementById('navigationbar').innerHTML = navbar;
document.getElementById('footer').innerHTML = footer;
