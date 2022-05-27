<!doctype html>

<base href="https://thdoan.github.io/bootstrap-select/" />

<link rel=stylesheet href="https://unpkg.com/bootstrap@4.3.1/dist/css/bootstrap.css" />
<link rel=stylesheet href="https://unpkg.com/bootstrap-select@1.13.8/dist/css/bootstrap-select.css" />

<style> body { margin: 1rem; } </style>

<!--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://thdoan.github.io/bootstrap-select/css/bootstrap-select.css">
-->

<h1> Bootstrap image-select </h1>


<select title="Select your surfboard" class="my-image-selectpicker">
    <option>Select...</option>
    <option data-thumbnail="images/icon-chrome.png">Chrome</option>
    <option data-thumbnail="images/icon-firefox.png">Firefox</option>
    <option data-thumbnail="images/icon-ie.png">IE</option>
    <option data-thumbnail="images/icon-opera.png">Opera</option>
    <option data-thumbnail="images/icon-safari.png">Safari</option>
</select>


<script src="https://unpkg.com/jquery@3.3.1/dist/jquery.slim.min.js"></script>
<script data-src="https://unpkg.com/popper.js@1.14.7/dist/popper.min.js"></script>
<script src="https://unpkg.com/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"
  data-src="https://unpkg.com/bootstrap@4.3.1/dist/js/bootstrap.min.js" ></script>
<script src="https://unpkg.com/bootstrap-select@1.13.8/dist/js/bootstrap-select.min.js"></script>

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
-->

<script>
const BASE_URL = $('base[ href ]').attr('href');

const $_SELECT_PICKER = $('.my-image-selectpicker');

$_SELECT_PICKER.find('option').each((idx, elem) => {
    const $OPTION = $(elem);
    const IMAGE_URL = $OPTION.attr('data-thumbnail');

    if (IMAGE_URL) {
        $OPTION.attr('data-content', "<img src='%i'/> %s".replace(/%i/, BASE_URL + IMAGE_URL).replace(/%s/, $OPTION.text()))
    }

    console.warn('option:', idx, $OPTION)
});

$_SELECT_PICKER.selectpicker();


// $('.selectpicker').selectpicker();

/* $(document).ready(function() {
  // Initiate with custom caret icon
  $('select.selectpicker').selectpicker({
    caretIcon: 'glyphicon glyphicon-menu-down'
  });
}); */
</script>



<p> . <p> . <p> .

<pre>

NDF / 27-March-2019.

 * https://github.com/snapappointments/bootstrap-select
 * https://github.com/thdoan/bootstrap-select
 * https://thdoan.github.io/bootstrap-select/examples.html
 * https://developer.snapappointments.com/bootstrap-select/

</pre>
