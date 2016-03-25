<!-- Title and guide text  -->
<div>
  <h1>Recent <i>Arachis</i> Publications from Pubmed</h1>
</div>


<script  type="text/javascript"  src="/sites/all/modules/arachis_recent_pubs/arachis_recent_pubs.js"></script>
<script>
  var period = <?php echo $period ?>;
</script>

<div>
  <fieldset>
    <form id="period"  action="">
            <!--<legend>Period:</legend><br>-->
            <b>Period:</b>&nbsp;&nbsp;
            <input type="radio" name="period" value="1"  onclick="FillDomElementWithRecentPubsHtml (this.value, 'publications');">&nbsp;&nbsp;Last month &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="period" value="3"  checked="checked"  onclick="FillDomElementWithRecentPubsHtml (this.value, 'publications');">&nbsp;&nbsp;Last 3 months&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="period" value="6"  onclick="FillDomElementWithRecentPubsHtml (this.value, 'publications');">&nbsp;&nbsp;Last 6 months &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="period" value="12"  onclick="FillDomElementWithRecentPubsHtml (this.value, 'publications');">&nbsp;&nbsp;Last 1 year &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="period" value="24"  onclick="FillDomElementWithRecentPubsHtml (this.value, 'publications');">&nbsp;&nbsp;Last 2 years
    </form>
    </fieldset>
    
  <!-- <p style="font-size:70%"></p> -->

For other legume species visit <a href="http://legumeinfo.org/publications/lis_legume_recent_pubs" target="_blank">Recent Legume Publications</a> at our sister site, LIS.
<br/>
<span style="font-size: 80%;">
  <strong>**Please note:</strong> Our search strategy excludes articles containing the terms, allerg*, toxi*, Asperg* and animal* in the title and abstract.  This helps us avoid listing many, not all, bio-medical and clinical articles from Pubmed.
  (<i>Content created with up-to-date data from NCBI Pubmed database</i>)
</span>
</div>
<hr/>

<div style="display: none">
<p>Debug:</p>
<?php
echo  "(From tpl.php::)  Selected period: ".$period;
?>
<hr/>
</div>

<script>
  //For initial page loading before user interaction
FillDomElementWithRecentPubsHtml (period, 'publications');
</script>    


<!-- =====================================================================  -->
<div id="publications">
    <br/><br/><br/><br/><br/>
    <span style='font-size:1.5em;color:#999999'>Please wait: Gettting data from Pubmed ...   ...   ...</span>
    <br/><br/><br/><br/><br/><br/><br/><br/>
</div>
<hr/>

<!-- END  -->  
