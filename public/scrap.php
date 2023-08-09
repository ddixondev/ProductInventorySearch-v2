<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="jquery.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="fabric.min.css">
<link rel="stylesheet" href="fabric.components.min.css">
<link rel="stylesheet" href="fabric_icons.css">
<link rel="stylesheet" href="app.css">
<script type="text/javascript" src="fabric.min.js"></script>
<style>

                body {
                    font-family: "Segoe UI Web Light", "Segoe UI Light", "Segoe WP Light", "Segoe UI", "Segoe WP", Tahoma, Arial, sans-serif;
                }

                .ms-MessageBanner {
                text-align:left !important;
                margin-bottom:10px;
                }
                .ms-MessageBar {
                display: block !important; 
                }

                .fieldEditBtn {
                    display:inline-block;
                    padding: 2px;
                    cursor:pointer;
                }

                .fieldEditBtn:hover {
                color:#7F00FF;
                }

                .fieldVal{
                display:inline-block;
                padding:2px; 
                margin-left:3px;
                }


            /*---------------begin css loader------------------------- */
            :root {
            --main-color: #111;
            --loader-color: #4caf50;
            --back-color: #a5d6a7;
            --time: 3s;
            --size: 3px;
            }

            .eps2_loader {
            background-color: var(--main-color);
            overflow: hidden;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            align-content: center;
            justify-content: flex-start;
            z-index: 100000;
            }

            .eps2_loader__element {
            height: var(--size);
            width: 100%;
            background: var(--back-color);
            }

            .eps2_loader__element:before {
            content: "";
            display: block;
            background-color: var(--loader-color);
            height: var(--size);
            width: 0;
            animation: getWidth var(--time) ease-in infinite;
            }

            @keyframes getWidth {
            100% {
                width: 100%;
            }
            }
            /*---------------end css loader------------------------- */

</style>
</head>

<body style="margin:0px;padding:0px;">
<div style="display:none;" class="eps2_loader">
<div class="eps2_loader__element"></div>
</div>











<pre>

OPTIMAL EXPERIENCE MODE

turn on optimal experience

form field order
form field input mask 
form field validation
question
tip

optimal experience may show associated fields

Example
First Name
no input mask
no input validation exept exclude characters
Please type your first name
Note: Your first name cannot contain any non alpha characters

The AI can be a EXTRA-LARGE SLIDE OUT panel

with a PREV NEXT SAVE CANEL CLOSE EXPAND


next or previous will slide up or slide down based on NEXT or PREVIOUS

the FORM will be COMPLETED in the BACKGROUND

</pre>





<script>
    var fields = [];
    var field = {};
        field.fieldDisplayName = "First Name";
        field.fieldValue = "Darrell";
        field.fieldInstructions = "Please enter your first name";
        field.fieldType = "TEXT";
        fields.push(field);

        var field = {};
        field.fieldDisplayName = "Last Name";
        field.fieldInstructions = "Please enter your last name";
        field.fieldType = "TEXT";
        fields.push(field);


        var field = {};
        field.fieldDisplayName = "DATASTATE";
        field.fieldInstructions = "The datastate shown <b>below</b> cannot be edited";
        field.fieldType = "TEXT";
        field.fieldDisabled = true;
        fields.push(field);

    

    //utility function for extensions to get GUIDs
    function EnterpriseProductivityServicesforSharePoint__UTILITY__generateUUID(){
    var d = new Date().getTime();
    if(window.performance && typeof window.performance.now === "function"){
        d += performance.now(); //use high-precision timer if available
    }
    var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        var r = (d + Math.random()*16)%16 | 0;
        d = Math.floor(d/16);
        return (c=='x' ? r : (r&0x3|0x8)).toString(16);
    });
    return 'ext-' + uuid;
    }    

    function renderMessageBar(msg,location){
        var str = "";
        str = str + '<div class="ms-MessageBar">';
        str = str + '<div class="ms-MessageBar-content">';
        str = str + '<div class="ms-MessageBar-icon">';
        str = str + '<i class="ms-Icon ms-Icon--Info"></i>';
        str = str + '</div>';
        str = str + '<div class="ms-MessageBar-text">';
        str = str + msg;
        str = str + '</div>';
        str = str + '</div>';
        str = str + '</div>';

        $(str).appendTo('.' + location);

    }

    function renderRequired(){

        var req_str = "";
        req_str = req_str + '<div class="ms-MessageBar ms-MessageBar--warning">';
        req_str = req_str + '<div class="ms-MessageBar-content">';
        req_str = req_str + '    <div class="ms-MessageBar-icon">';
        req_str = req_str + '    <i class="ms-Icon ms-Icon--Warning"></i>';
        req_str = req_str + '    </div>';
        req_str = req_str + '    <div class="ms-MessageBar-text">';
        req_str = req_str + 'This field is required!';
        req_str = req_str + '    </div>';
        req_str = req_str + '</div>';
        req_str = req_str + '</div>';

        $(req_str).prependTo('.ms-Panel-contentInner');
    }

    function renderInstructions(msg,location){


        var str = "";
        str = str + '<div class="ms-MessageBanner">';
        str = str + '<div class="ms-MessageBanner-content">';
        str = str + '<div style="padding:18px;" class="ms-MessageBanner-text">';
        str = str + '<div class="ms-MessageBanner-clipper">';
        str = str + msg;
        str = str + '</div>';
        str = str + '</div>';
        str = str + '</div>';
        str = str + '</div>';

        $(str).appendTo('.' + location);

    }


</script>


<?php
//moving the logic of EPS to PHP serverside

function digest($access){
$accesssub = explode(':', $access);
$accesssubLength = count($accesssub); 

    $i = 0;
    while ($i < $accesssubLength)
    {
        echo '<span style="display:inline-block;border:1px solid silver;padding:5px;">' . $accesssub[$i] .'</span>';
        $i++;
    }

}

//for security reasons
$accesstr = "F:FIELDNAME:9|G:Freight Cost Tracking Management System Members:1|G:OPTIMIZATIONTEAM:1|G:ADMIN:1";

$access = explode('|', $accesstr);
$accessLength = count($access); 

$i = 0;
while ($i < $accessLength)
{
    echo "<br /><br />" . $access[$i] ."<br />";
    digest($access[$i]);
    $i++;
}

?>

<pre>
Expand the Versions, UNHIDE the save buttons, AFIX them to the BOTTOM of the pannel
In the Form View (not the edit field view) Auto Completion of data saved in the PROFILE


FORM ACCESS
F:FIELDNAME:9|G:Freight Cost Tracking Management System Members:1|G:OPTIMIZATIONTEAM:1|G:ADMIN:1

NOTIFICATION ACCESS for emails
F:MANAGEREMAIL:012|F:OPTEMAIL:014|F:CREATOREMAIL:015
</pre>


<?php



$myfile = fopen("form4.htm", "r") or die("Unable to open file!");
$form = fread($myfile, filesize("form4.htm"));
fclose($myfile);
//echo $form;

function getfieldVal($fieldDisplayName){
    $fieldVal = "";
    if ($fieldDisplayName == "First Name"){
        $fieldVal = "Kendra";
    }

    if ($fieldDisplayName == "Last Name"){
        $fieldVal = "Smith";
    }

    if ($fieldDisplayName == "Start Date"){
        $fieldVal = "01/12/2022";
    }

    if ($fieldDisplayName == "Responsible Delegate"){
        $fieldVal = "themailcenter@gmail.com";
    }

    if ($fieldDisplayName == "DATASTATE"){
        $fieldVal = "NEWFORM";
    }

    return $fieldVal;
}

function processForm($matches){
  //array size is greater than zero";
            $fieldDisplayName = $matches[0];
            $fieldDisplayName = str_replace("[","",$fieldDisplayName);
            $fieldDisplayName = str_replace("]","",$fieldDisplayName);
            $fieldDisplayName = trim($fieldDisplayName);

    $replacementVal = '';

    //this uses strpos and checks the matches for substring = TEXT
    
        $fieldVal = getfieldVal($fieldDisplayName);
        $replacementVal = '<span onclick="formFlyOut(\''. $fieldDisplayName . '\',this);" class="fieldEditBtn" title="Edit ' . $fieldDisplayName . '" alt="' . $fieldDisplayName . '" fielddisplayname="' . $fieldDisplayName . '"><img style="width:16px;height:16px;" src="edit.png"></span><span title="' . $fieldDisplayName . '" alt="' . $fieldDisplayName . '" fielddisplayname="' . $fieldDisplayName . '" class="fieldVal">' . $fieldVal . '</span>';
        return $replacementVal;
}

//$pattern = "/\[\[(\w+)\]\]/i";
$pattern = "/\[\[[a-zA-Z0-9 ]+\]\]/i";
echo preg_replace_callback($pattern, 'processForm', $form);


?>

<script>
//microsoft word adds widths to table, td, and th
//we use javascript to REMOVE all width declarations    
 $('table, td, th').removeAttr('width');
 $('table, td, th').css('width','auto');
 $('table').css('width','100%');



 function eps2_panel_expand(){
$('.ms-Panel.ms-Panel--xl').addClass('eps2_expand_panel');
$('.eps2_panel_btn_expand').hide();
$('.eps2_panel_btn_restore').show();
}

function eps2_panel_restore(){
$('.ms-Panel.ms-Panel--xl').removeClass('eps2_expand_panel');
$('.eps2_panel_btn_restore').hide();
$('.eps2_panel_btn_expand').show();
}


 function formFlyOut(fieldDisplayName,obj){


    fieldEditBtnCNT_Current = $(obj).attr('order');
    fieldEditBtnCNT_Current = parseInt(fieldEditBtnCNT_Current);

        //destroy previous panels 
        $('.ms-PanelExample').remove();

        //append panels
        $(' <div class="ms-PanelExample"> <div class="ms-Panel ms-Panel--xl"><button onclick="eps2_panel_expand();" class="eps2_panel_btn_expand eps2_panel_btn_class ms-Button ms-Button--hero"><span class="ms-Button-icon"><i class="ms-Icon ms-Icon--PopExpand"></i></span></button><button style="display:none;" onclick="eps2_panel_restore();" class="eps2_panel_btn_restore eps2_panel_btn_class ms-Button ms-Button--hero"><span class="ms-Button-icon"><i class="ms-Icon ms-Icon--BackToWindow"></i></span></button><button class="ms-Panel-closeButton ms-PanelAction-close"> <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel"></i> </button> <div class="ms-Panel-contentInner"> <span style="margin-bottom:10px;display:block;" class="ms-font-su ms-font-xxl">' + fieldDisplayName + '</span><div class="fieldInst"></div><div class="ms-Panel-content"><div class="fieldInput"></div></div></div>').appendTo('body');



        //make the panel
        var PanelExamples = document.getElementsByClassName("ms-PanelExample");
        for (var i = 0; i < PanelExamples.length; i++) {
            var PanelExamplePanel = PanelExamples[i].querySelector(".ms-Panel");
            new fabric['Panel'](PanelExamplePanel);
        } 





        for (var i = 0; i < fields.length; i++) { 
            
            if (fields[i].fieldDisplayName == fieldDisplayName){
                
                //add instructions
                var inst = fields[i].fieldInstructions;
                
                if (inst == null || inst.length < 1){
                    //do nothing
                }
                else
                {
                    //add instructions IF they exist
                     renderMessageBar(inst,'fieldInst');
                     //renderInstructions(inst,'fieldInst');

                }

                //add field type
                var type = fields[i].fieldType;
                
                if (type == null || type.length < 1){
                    //do nothing
                }
                else
                {
                   //add the type
                   if (type == "TEXT"){
                    renderInputText(fieldDisplayName,'fieldInput');   
                   }


                }
                          

            }
        }


     //if required render it
     renderRequired();

    //remder versions
    renderFieldVersions(fieldDisplayName);




     }



     function renderFieldVersions(fieldDisplayName){
      
        var str = "";
        

        str = str + '<!--------------------------------version begin--------------------------->';
        str = str + '<div class="mockupholder">';
                            
        str = str + '<table tabindex="-1" class="eps-accordion" style="width:100%;cursor:pointer;margin-bottom:15px;" onclick="UIDiscoverAllocationPeopleSearchExpand(this);">';
        str = str + '<tr>';
        str = str + '<td style="width:60px;text-align:left;">';
        str = str + '<span class="DiscoverAllocationSectionExpand">';
        str = str + '<i class="ms-Icon ms-Icon--ChevronDownMed"></i>';
        str = str + '</span>';
        str = str + '</td>';
        str = str + '<td>';
        str = str + '<span class="ms-font-su ms-font-l">Recent Changes and Version History for this field</span>';
        str = str + '</td>';
        str = str + '</tr>';
        str = str + '</table>';
        str = str + '<div class="mockupholderinner" style="display:none;">';


        str = str + '<!----------version tab begin--------------------------->';
        str = str + '<div class="ms-Pivot">';
        str = str + '<ul class="ms-Pivot-links">';
        str = str + '<li class="ms-Pivot-link is-selected" data-content="files" title="My files" tabindex="1">';
        str = str + 'Recent Changes';
        str = str + '</li>';
        str = str + '<li class="ms-Pivot-link " data-content="recent" title="Recent" tabindex="1">';
        str = str + 'Version History';
        str = str + '</li>';
        str = str + '</ul>';
        str = str + '<div class="ms-Pivot-content" data-content="files">';

        str = str + '<!----banner begin---->';
        str = str + '<div class="ms-MessageBar">';
        str = str + '<div class="ms-MessageBar-content">';
        str = str + '<div class="ms-MessageBar-icon">';
        str = str + '<i class="ms-Icon ms-Icon--Info"></i>';
        str = str + '</div>';
        str = str + '<div class="ms-MessageBar-text">';
        str = str + 'Below are all the edits to this field in this current session:';
        str = str + '</div>';
        str = str + '</div>';
        str = str + '</div>';
        str = str + '<!----banner end---->';

        str = str + '<br>';
        str = str + 'Edit History';
        str = str + '</div>';
        str = str + '<div class="ms-Pivot-content" data-content="recent">';

        str = str + '<!----banner begin---->';
        str = str + '<div class="ms-MessageBar">';
        str = str + '<div class="ms-MessageBar-content">';
        str = str + '<div class="ms-MessageBar-icon">';
        str = str + '<i class="ms-Icon ms-Icon--Info"></i>';
        str = str + '</div>';
        str = str + '<div class="ms-MessageBar-text">';
        str = str + 'Below is the most recent saved changes to this field by version:';
        str = str + '</div>';
        str = str + '</div>';
        str = str + '</div>';
        str = str + '<!----banner end---->';

        str = str + '<br>';
        str = str + 'Version History';
        str = str + '</div>';
        str = str + '</div>';
        str = str + '<!----------version tab end--------------------------->';


        str = str + '</div>';
        str = str + '</div>';
        str = str + '<!--------------------------------version end--------------------------->';
        $(str).appendTo('.ms-Panel-contentInner');



        var PivotElements = document.querySelectorAll(".ms-Pivot");
        for (var i = 0; i < PivotElements.length; i++) {
            new fabric['Pivot'](PivotElements[i]);
        }


     }


    
     function getProperties(fieldDisplayName,epsguid){
     
        
        for (var i = 0; i < fields.length; i++) { 
            
            if (fields[i].fieldDisplayName == fieldDisplayName){
                

                //loop through all the properties of the field
                $.each( fields[i], function(property, setting){
                
                    
                    


                });
                
       

            }
        }
     

     }


     function renderInputText(fieldDisplayName,location){

        var VALUE = $('span.fieldVal[fielddisplayname="' + fieldDisplayName + '"]').text();
            VALUE = VALUE.trim();
        var GUID = 'input-' + EnterpriseProductivityServicesforSharePoint__UTILITY__generateUUID();

        //get additional field properties
        /*
        var disabled = getInputAttributes(fieldDisplayName,'disabled');
        var inputmask = getInputAttributes(fieldDisplayName,'inputmask');
        var required = getInputAttributes(fieldDisplayName,'required');
        var css = getInputAttributes(fieldDisplayName,'css');
        */

        var css = "";


        var str = "";
        str = str + '<div alt="' + fieldDisplayName + '" title="' + fieldDisplayName + '" class="ms-TextField">';
        str = str + '<label style="display:none;" class="ms-Label"></label>';
        str = str + '<input eps_input_type="text"  epsguid="' + GUID + '" style="' + css + '" class="eps_input ms-TextField-field" type="text" value="' + VALUE + '" placeholder="' + fieldDisplayName + '">';
        str = str + '</div>';

        var fieldEditBtnCNTALL = $('.fieldEditBtn').length
            fieldEditBtnCNTALL = parseInt(fieldEditBtnCNTALL);

            var disableNext = "";
            var disablePrev = "";
            var actionNext = 'onclick="inputMoveNext(\'' + fieldDisplayName + '\');" ';
            var actionPrev = 'onclick="inputMovePrev(\'' + fieldDisplayName + '\');" ';

        if (fieldEditBtnCNTALL == fieldEditBtnCNT_Current){
            //we are on the last one, disable next
            disableNext = "disabled ";
            actionNext = "";
        }

        if (fieldEditBtnCNT_Current == 1){
            disablePrev = "disabled ";
            actionPrev = "";
        }

        str = str + '<div style="display:none;" class="inputPager">';
        str = str + '<button ' + actionPrev + ' class="' + disablePrev + 'paginate_button previous ms-Button-labeldt-button ms-Button ms-Button--primary buttons-html5">Previous</button>';
        str = str + '<button ' + actionNext + ' class="' + disableNext + 'paginate_button next ms-Button-labeldt-button ms-Button ms-Button--primary buttons-html5">Next</button>';
        str = str + '<button onclick="inputSave(\'' + fieldDisplayName + '\')" class="paginate_button saveandclose ms-Button-labeldt-button ms-Button ms-Button--primary buttons-html5">Update and Close</button>';

        str = str + '</div>';

        $(str).appendTo('.' + location);


        var TextFieldElements = document.querySelectorAll(".ms-TextField");
        for (var i = 0; i < TextFieldElements.length; i++) {
        new fabric['TextField'](TextFieldElements[i]);
        }

    
     }





     function eps2_processing(){
                try{
                    $('.eps2_loader').fadeIn();
                    setTimeout(function(){	
                    $('.eps2_loader').fadeOut();	
                    }, 2500);	
                }catch(e){
                    //do nothing
                }
            }


    document.body.addEventListener('click', eps2_processing, true);     
    
   var fieldEditBtnCNT_Current = 0; 
   var fieldEditBtnCNT = 0;
    $(".fieldEditBtn").each(function() { 
        
        fieldEditBtnCNT  = fieldEditBtnCNT + 1;
        
        $(this).attr('order',fieldEditBtnCNT);

    });


    function inputMoveNext(fieldDisplayName){
        
    fieldEditBtnCNT_Current = fieldEditBtnCNT_Current + 1;   
    //this works if its a textbox | eps_input_type="text" we can use this too
    var updatedVal = $('div .fieldInput').find('.eps_input').val();
    $('span.fieldVal[fielddisplayname="' + fieldDisplayName + '"]').text(updatedVal);

    $('button.ms-Panel-closeButton.ms-PanelAction-close').trigger("click");
    $('.fieldEditBtn[order="'+ fieldEditBtnCNT_Current + '"]').trigger("click");

    }


    function inputMovePrev(fieldDisplayName){
    fieldEditBtnCNT_Current = fieldEditBtnCNT_Current - 1;   
    //this works if its a textbox
    var updatedVal = $('div .fieldInput').find('.eps_input').val();
    $('span.fieldVal[fielddisplayname="' + fieldDisplayName + '"]').text(updatedVal);

    $('button.ms-Panel-closeButton.ms-PanelAction-close').trigger("click");
    $('.fieldEditBtn[order="'+ fieldEditBtnCNT_Current + '"]').trigger("click");

    }


    function inputSave(fieldDisplayName){ 
    var updatedVal = $('div .fieldInput').find('.eps_input').val();
    $('span.fieldVal[fielddisplayname="' + fieldDisplayName + '"]').text(updatedVal);
    $('button.ms-Panel-closeButton.ms-PanelAction-close').trigger("click");
    }





	function UIDiscoverAllocationPeopleSearchExpand(obj){
	
	if ($(obj).find('i').hasClass('ms-Icon--ChevronDownMed')){
		//remove the down chevron
		$(obj).find('i').removeClass('ms-Icon--ChevronDownMed');
		//replace with up chevron
		$(obj).find('i').addClass('ms-Icon--ChevronUpMed');
		
		//slide down the selections
		$(obj).closest('.mockupholder').find('.mockupholderinner').slideDown();
		}
		else
		{
		
		//remove the up chevron
		$(obj).find('i').removeClass('ms-Icon--ChevronUpMed');
		//replace with down chevron
		$(obj).find('i').addClass('ms-Icon--ChevronDownMed');
		//slide up the selections
		$(obj).closest('.mockupholder').find('.mockupholderinner').slideUp();
		
		}
	}
	

</script> 




<style>
    .paginate_button {
    box-sizing: border-box;
    display: inline-block;
    margin-left: 3px;
    font-family: "Segoe UI Web Light", "Segoe UI Light", "Segoe WP Light", "Segoe UI", "Segoe WP", Tahoma, Arial, sans-serif;
    font-size: 18px;
    text-align: center;
    cursor: pointer;
    color: white;
    /* padding: 10px; */
    border: 0px;
    font-weight: 600;
    font-size: 14px;
}


.DiscoverAllocationSectionExpand {
    border: 0px solid #c8c8c8;
    text-align: center;
    display: inline-block;
    padding: 10px;
    cursor: pointer;
}

.mockupholder {
    color: #333;
    font-family: "Segoe UI Web Light", "Segoe UI Light", "Segoe WP Light", "Segoe UI", "Segoe WP", Tahoma, Arial, sans-serif;
    font-size: 18px;
    font-weight: 400;
    margin: 0px;
    background-color: rgba(255, 255, 255, 0.98);
    -webkit-box-shadow: 0 0 0 1px rgb(0 0 0 / 10%);
    box-shadow: 0 0 0 1px rgb(0 0 0 / 10%);
    padding: 10px 15px;
    margin-top: 15px;
}

</style>    








</body>

</html>