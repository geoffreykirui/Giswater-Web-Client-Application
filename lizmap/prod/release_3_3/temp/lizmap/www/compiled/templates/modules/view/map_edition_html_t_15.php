<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('C:\webserver\lizmap\prod\release_3_3\lizmap/modules/view/templates/map_edition.tpl') > 1632207656){ return false;
} else {
function template_meta_838fd9b916917ac53b169edf07429186($t){

}
function template_838fd9b916917ac53b169edf07429186($t){
?><div class="edition">
    <h3><span class="title"><span class="icon"></span>&nbsp;<span class="text"><?php echo jLocale::get('view~edition.toolbar.title'); ?></span></span></h3>
    <div class="menu-content">
        <p id="edition-modification-msg">
            <?php echo jLocale::get('view~edition.modification.msg'); ?>

        </p>
        <div id="edition-creation">
            <div>
                <select id="edition-layer"></select>
            </div>

            <a id="edition-draw" class="btn btn-small" href="#" rel="tooltip"
                title="<?php echo jLocale::get('view~edition.toolbar.draw.tooltip'); ?>"
                data-placement="bottom"><?php echo jLocale::get('view~edition.toolbar.draw.title'); ?></a>
        </div>

        <form id="edition-hidden-form" style="display:none;">
            <input type="hidden" name="liz_wkt" value="" />
        </form>

        <div class="tabbable edition-tabs" style="display: none;">
            <ul class="nav nav-pills">
                <li class="active"><a href="#tabform" data-toggle="tab"><?php echo jLocale::get('view~edition.tab.form.title'); ?></a></li>
                <li><a href="#tabdigitization" data-toggle="tab"><?php echo jLocale::get('view~edition.tab.digitization.title'); ?></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tabform">
                    <div id="edition-form-container">
                    </div>
                    <div id="edition-children-container" style="display:none;">
                    </div>
                </div>
                <div class="tab-pane" id="tabdigitization">
                    <div id="edition-geomtool-container" class="btn-group" data-toggle="buttons-radio"
                        style="display:none;">
                        <button id="edition-geomtool-nodetool" class="btn btn-small"
                            data-original-title="<?php echo jLocale::get('view~edition.geomtool.nodetool.title'); ?>">
                            <i class="icon-none qgis_sprite mActionNodeTool"></i>
                        </button>
                        <button id="edition-geomtool-drag" class="btn btn-small"
                            data-original-title="<?php echo jLocale::get('view~edition.geomtool.drag.title'); ?>">
                            <i class="icon-none qgis_sprite mActionMoveFeature"></i>
                        </button>
                        <button id="edition-geomtool-rotate" class="btn btn-small"
                            data-original-title="<?php echo jLocale::get('view~edition.geomtool.rotate.title'); ?>">
                            <i class="icon-none qgis_sprite mActionRotateFeature"></i>
                        </button>
                        <button id="edition-geomtool-reshape" class="btn btn-small"
                            data-original-title="<?php echo jLocale::get('view~edition.geomtool.reshape.title'); ?>">
                            <i class="icon-none qgis_sprite mActionReshape"></i>
                        </button>
                        <button id="edition-geomtool-split" class="btn btn-small"
                            data-original-title="<?php echo jLocale::get('view~edition.geomtool.splitfeatures.title'); ?>">
                            <i class="icon-none qgis_sprite mActionSplitFeatures"></i>
                        </button>
                    </div>
                    <form id="edition-point-coord-form" class="form-horizontal" style="display:none;">
                        <fieldset>
                            <div id="edition-point-coord-form-group" class="jforms-table-group">
                                <h3><?php echo jLocale::get('view~edition.point.coord.title'); ?></h3>
                                <div class="control-group">
                                    <label class="jforms-label control-label" for="edition-point-coord-crs"
                                        id="edition-point-coord-crs-label"><?php echo jLocale::get('view~edition.point.coord.crs.label'); ?></label>
                                    <div class="controls">
                                        <select name="coord-crs" id="edition-point-coord-crs"
                                            class="jforms-ctrl-menulist">
                                            <option value="4326" selected="selected"><span>EPSG:4326</span></option>
                                            <option id="edition-point-coord-crs-layer" value="" style="display:none;">
                                            </option>
                                            <option id="edition-point-coord-crs-map" value="" style="display:none;">
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="jforms-label control-label" for="edition-point-coord-x"
                                        id="edition-point-coord-x-label"><?php echo jLocale::get('view~edition.point.coord.x.label'); ?></label>
                                    <div class="controls">
                                        <input name="coord-x" id="edition-point-coord-x"
                                            class="jforms-ctrl-input input-small" value="" type="text">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="jforms-label control-label" for="edition-point-coord-y"
                                        id="edition-point-coord-y-label"><?php echo jLocale::get('view~edition.point.coord.y.label'); ?></label>
                                    <div class="controls">
                                        <input name="coord-y" id="edition-point-coord-y"
                                            class="jforms-ctrl-input input-small" value="" type="text">
                                    </div>
                                </div>
                                <div class="control-group hidden">
                                    <label
                                        class="jforms-label control-label"><?php echo jLocale::get('view~edition.segment.length.label'); ?></label>
                                    <div class="controls">
                                        <label id="edition-segment-length"></label>
                                    </div>
                                </div>
                                <div class="control-group hidden">
                                    <label
                                        class="jforms-label control-label"><?php echo jLocale::get('view~edition.segment.angle.label'); ?></label>
                                    <div class="controls">
                                        <label id="edition-segment-angle"></label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button name="submit" id="edition-point-coord-add"
                                            class="btn btn-small"><?php echo jLocale::get('view~edition.point.coord.add.label'); ?></button>
                                        <button name="submit" id="edition-point-coord-submit"
                                            class="btn btn-small"><?php echo jLocale::get('view~edition.point.coord.finalize.label'); ?></button>
                                    </div>
                                </div>
                                <div class="control-group" id="edition-point-coord-geolocation-group"
                                    style="display:none;">
                                    <div class="controls">
                                        <label class="jforms-label checkbox" for="edition-point-coord-geolocation"
                                            id="edition-point-coord-geolocation-label">
                                            <input name="checked" id="edition-point-coord-geolocation"
                                                class="jforms-ctrl-checkbox" value="1" type="checkbox">
                                            <?php echo jLocale::get('view~edition.point.coord.geolocation.label'); ?>

                                        </label>
                                    </div>
                                </div>
                                <lizmap-geolocation-survey></lizmap-geolocation-survey>
                                <lizmap-snapping></lizmap-snapping>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="edition-waiter" class="waiter">
        <h3><span class="title"><span class="icon"></span>&nbsp;<span class="text"><?php echo jLocale::get('view~edition.toolbar.title'); ?></span></span></h3>
        <div class="menu-content">
            <div class="progress progress-striped active">
                <div class="bar" style="width: 100%;"></div>
            </div>
        </div>
    </div>

</div>
<?php 
}
return true;}
