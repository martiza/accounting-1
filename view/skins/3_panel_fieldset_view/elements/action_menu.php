<?php

use tushar\configuration;

if (isset($this)) {
    $view = &$this;
}
$subActions = array('index', 'edit', 'view', 'delete');
if (\tushar\request::authenticate()) {
    $links = array();
    $modelObj = \module\development_base\model\menus::getInstance();

    $uuid = $this->request->get('search_view');
    ?>
    <div class="action-menu action-bar" search_view="<?php echo $uuid; ?>"  style="clear: both;margin:0px;">
        <table style="width: 100%;" class="no-mp">
            <tr  class="no-mp">
                <td  class="no-mp">
                    <div id="controller-action-panel" class="controller-action-panel float-left" style="margin-top: 0px;">
                        <?php
                        if ($view->request->action !== 'dashboard' && ($this->render == 'error' || $this->request->layout != 'detail')) {
                            $id = $view->get(array('id'), false);

                            if ($this->render == 'error') {
                                $actions = array();
                                $actions[] = array('name' => 'Go Back', 'type' => 'button');
                                $actions[] = array('name' => 'Notify System Admin', 'type' => 'button');
                                if ($this->request->get('id') != '') {
                                    $actions[] = array('name' => 'Request Access', 'type' => 'button');
                                }
                                foreach ($actions as $action) {
                                    echo \tushar\html::start('button', $action);
                                    echo __($action['name'], 'module');
                                    echo \tushar\html::end('button'), '&nbsp;';
                                }
                            } else {
                                echo \tushar\html::controllerSubactionBar(
                                        $view, $view->request->requestedModule, $view->request->requestedController, $view->request->requestedAction
                                );
                            }
                        }
                        ?>
                    </div>
                </td>
                <?php
                if (in_array($this->request->controller, array('accounts', 'journal_entries', 'journal_entry_lines'))) {
                    ?>
                    <td  class="no-mp">
                        <table class="float-right company_fiscal_year_container" style="clear: both;margin:0px;">
                            <tr>
                                <?php
                                $companyID = $this->request->session('company_id');
                                $companyName = $this->request->session('company_name');

                                $fiscalYearID = $this->request->session('fiscal_year_id');
                                $fiscalYearName = $this->request->session('fiscal_year_name');

                                $periodID = $this->request->session('period_id');
                                $periodName = $this->request->session('period_name');

                                $params = array('name' => array('company_id'), 'value' => $companyID, 'text' => $companyName, 'open' => 0,  'placeholder' => 'Company',
                                    'children' => array(array('text' => 'Company', 'value' => 'company', 'model' => 'companies', 'href' => 'crm_base/companies/index'))
                                );

                                echo '<td>', \tushar\form::popup($this, $params), '</td>';

                                $params = array('name' => array('fiscal_year_id'), 'value' => $fiscalYearID, 'text' => $fiscalYearName, 'open' => 0,  'placeholder' => 'Fiscal Year',
                                    'children' => array(array('text' => 'Fiscal Year', 'value' => 'fiscal_years', 'model' => 'fiscal_years', 'href' => 'accounting/fiscal_years/index'))
                                );
                                echo '<td>', \tushar\form::popup($this, $params), '</td>';

                                $params = array('name' => array('period_id'), 'value' => $periodID, 'text' => $periodName, 'open' => 0,  'placeholder' => 'Period',
                                    'children' => array(array('text' => 'Period', 'value' => 'periods', 'model' => 'periods', 'href' => 'accounting/periods/index'))
                                );
                                echo '<td>', \tushar\form::popup($this, $params), '</td>';
                                $params = array('name' => array('by_company_fiscal_year'), 'value' => 'Apply', 'type' => 'button');
                                echo '<td>', \tushar\form::submit($this, $params), '</td>';
                                ?>
                            </tr>
                        </table>
                    </td>
                    <?php
                }
                ?>

            </tr>
        </table>
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            $("#data-company_id").change(function(){
                $("#data-fiscal_year_id").val("");
                $("#data-__fiscal_year_id").val("");
                $("#data-period_id").val("");
                $("#data-__period_id").val("");
            });
            $("#data-__fiscal_year_id").bind('beforeSearch',function(){
                var q=$(this).data("q");
                if(!$.isset(q["where"])){
                    q["where"]={};
                }
                if($("#data-company_id").val() != ""){
                    if($.isPlainObject(q["where"])){
                        q["where"]["company_fiscal_years.company_id"]=$("#data-company_id").val();
                    }else{
                        q["where"].push({"company_fiscal_years.company_id":$("#data-company_id").val()});
                    }
                }
                $(this).data("q",q);
            });
            $("#data-fiscal_year_id").change(function(){
                $("#data-period_id").val("");
                $("#data-__period_id").val("");
            });
                                                                                                                                                
            $("#data-__period_id").bind('beforeSearch',function(){
                var q=$(this).data("q");
                if(!$.isset(q["where"])){
                    q["where"]={};
                }
                if($("#data-fiscal_year_id").val() != ""){
                    if($.isPlainObject(q["where"])){
                        q["where"]["periods.fiscal_year_id"]=$("#data-fiscal_year_id").val();
                    }else{
                        q["where"].push({"periods.fiscal_year_id":$("#data-fiscal_year_id").val()});
                    }
                }
                $(this).data("q",q);
            });
            $("#data-by_company_fiscal_year").click(function(){
                var params={'params':''};
                var companyID=$("#data-company_id").val()
                if(typeof(companyID) !='undefined' && companyID !=""){
                    params['params'] += "&company_id="+companyID;
                }else{
                    params['params'] += "&company_id=";
                }
                var fiscalYearID=$("#data-fiscal_year_id").val();
                if(typeof(fiscalYearID) !='undefined' && fiscalYearID != ""){
                    params['params'] += "&fiscal_year_id="+fiscalYearID;
                }else{
                    params['params'] += "&fiscal_year_id=";
                }
                var periodID=$("#data-period_id").val();
                if(typeof(periodID) !='undefined' && periodID != ""){
                    params['params'] += "&period_id="+periodID;
                }else{
                    params['params'] += "&period_id=";
                }
                $.listviewSearch("#<?php echo $uuid; ?>",params);
            });
        });
    </script>

    <?php
}