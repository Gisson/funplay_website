<html>
<body>
<script src="https://code.jquery.com/jquery-2.2.3.min.js
" ></script>
<script src="src/Controller.js" ></script>
<script src="src/Model.js" ></script>
<script src="src/View.js" ></script>
<script src="src/Event.js" ></script>
<script>

$(function () {
    var model = new Model(['PHP', 'JavaScript']),
        view = new View(model, {
            'list' : $('#list'),
            'addButton' : $('#plusBtn'),
            'delButton' : $('#minusBtn')
        }),
        controller = new Controller(model, view);

    view.show();
});

</script>
</body>
</html>
