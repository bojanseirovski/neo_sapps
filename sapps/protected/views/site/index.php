<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<div id="world-map" style="width: 100%; height: 90%;"></div>
<script>
    $(function() {
        $('#world-map').vectorMap(
                {
                    map: 'world_mill_en',
                    regionsSelectable:'true',
                    selectedRegions : <?php echo $countries; ?>
                }
        );
    });

</script>
<!--<section id="content">

    <div id="object"></div>
    <div id="object-info">
        <h1>Object Name</h1>
        <p>Object Paragraph</p>
    </div>
    <script>
        $('object-info').bPopup();
    </script>

    <script>
// Semicolon (;) to ensure closing of earlier scripting
// Encapsulation
// $ is assigned to jQuery
        ;
        (function($) {
            // DOM Ready
            $(function() {
                // Binding a click event
                // From jQuery v.1.7.0 use .on() instead of .bind()
                $('#button-info').bind('click', function(e) {

                    // Prevents the default action to be triggered. 
                    e.preventDefault();

                    // Triggering bPopup when click event is fired
                    $('#object-info').bPopup();

                });

            });

        })(jQuery);
    </script>

</section>-->