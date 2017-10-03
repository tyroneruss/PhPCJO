<!-- Header end from BasicPageHeader.tpl -->
<html>
    <head>
        <title>Compare Job Offers </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="Compare Jobs Offers" />
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/styletab.css">

        <script type="text/javascript">			

                function loadTabContent(tabUrl){
                        $("#preloader").show();
                        jQuery.ajax({
                                url: tabUrl, 
                                cache: false,
                                success: function(message) {
                                        jQuery("#tabcontent").empty().append(message);
                                        $("#preloader").hide();
                                }
                        });
                }

                jQuery(document).ready(function(){				

                        $("#preloader").hide();				
                        jQuery("[id^=tab]").click(function(){	

                                // get tab id and tab url
                                tabId = $(this).attr("id");										
                                tabUrl = jQuery("#"+tabId).attr("href");

                                jQuery("[id^=tab]").removeClass("current");
                                jQuery("#"+tabId).addClass("current");

                                // load tab content
                                loadTabContent(tabUrl);
                                return false;
                        });
                });

        </script>
    </head>
    
    <body>

    <div id="container">
       <div id="intro">
           <div id="pageHeader">
                   <div id="sitename">
                       <h1>&nbsp;&nbsp;CompareJobOffers</h1>
                   </div>          
           </div>
       </div>
    </div>
		
    <div class="container_tab">

            <div class="navcontainer">
                    <ul>
                            <li><a id="tab1" href="tabs.php?id=1">Home</a></li>
                            <li><a id="tab2" href="tabs.php?id=2">Compare Offers</a></li>
                            <li><a id="tab3" href="tabs.php?id=3">Evaluate Offer</a></li>
                            <li><a id="tab4" href="tabs.php?id=4">Available Jobs</a></li>
                    </ul>
            </div>

            <div id="preloader">
                    <img src="loading.gif" align="absmiddle"> Loading...				
            </div>

            <div id="tabcontent">
            Simple AJAX Tabs
            </div>

    </div>
	</body>
</html>


            