<script>
        $(document).ready(function (){
            $("#payment_method").change(function() {
                // foo is the id of the other select box 
                if ($(this).val() != "bank") {
                    $("#foo").show();
                }else{
                    $("#foo").hide();
                } 
            });
        });
    </script>



    <script>
        $(document).ready(function (){
            $("#payment_method").change(function() {
                // option2 is the id of the other select box 
                if ($(this).val() != "bank") {
                    $("#option1").show();
                }else{
                    $("#option1").hide();
                } 
            });
        });
    </script>


    


<script type="text/javascript">
        
        $(function() {
         $('#paymentselector').change(function(){
             $('.payments').hide();
            $('#' + $(this).val()).show();

             });

            });
    </script>

    </body>

</html>




      public function transection_success($id)

         {

        $cardgenerate = Cardgenerate::find($id); 

        $cardgenerate->transaction_status = 1; 

        $cardgenerate->save(); 

        return redirect('/');
    }


    if ($validatedData->success()) {


        $bankgenerate = bankgenerate::find($id); 

        $bankgenerate->transaction_status = 1; 
    
            } 