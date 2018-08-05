    
<?php include 'header.php';?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="./js/comparecar.js"></script>
    <div align="center">
    <table style="height: 200px; ">
        <div class="row">
            <div class="col-xs-6 col-xs-6">
                <tbody class="text-center">
                    <tr>
                        <td style="padding:200px 0; text-align:center;" >
                            <select name="car-years" id="car-years" class="selectpicker"></select></td>
                        <td><select name="car-makes" id="car-makes"></select></td>
                        <td><select name="car-models" id="car-models"></select></td>
                        <td><select name="car-model-trims" id="car-model-trims"></select></td>
                        <td><button id="cq-show-data" class="btn-primary" type="button"/>Show Data</td>
                    
                        <script>$('#cq-show-data').click(function () { carquery1.populateCarData('car-model-data'); });</script>
    
                        <td style="padding:200px 0; text-align:center;" >
                        <select name="car-years2" id="car-years2" class="selectpicker"></select></td>
                        <td><select name="car-makes2" id="car-makes2"></select></td>
                        <td><select name="car-models2" id="car-models2"></select></td>
                        <td><select name="car-model-trims2" id="car-model-trims2"></select></td>
                        <td><button id="cq-show-data2" class="btn-primary" type="button"/>Show Data</td>
                    <script>$('#cq-show-data2').click(function () { carquery2.populateCarData('car-model-data2'); });</script>
                   
                    </tr>
                    <tr><td colspan="5" align="center">
                        <div class="jumbotron">
                        <div id="car-model-data"></div>
                        </div></td>
                        
                        <td colspan="5" align="center">
                        <div class="jumbotron">
                        <div id="car-model-data2"></div>
                        </div></td>
                </tbody>
            </div>
        </div>   
    </table>
</div>

<?php include 'footer.php';?>