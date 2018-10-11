<template>
    <div>

        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
            <div class="row">
                <div v-for="item in datas" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="style">
                        <div class="styletable">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">
                                        <div class="left-title">Name</div>
                                    </th>
                                    <th scope="col">
                                        <div class="number">{{ item.ToolName }}</div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="left-title">Production Count</div>
                                    </td>
                                    <td>
                                        <div class="number">{{item.Quantity}}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="left-title">Recipe</div>
                                    </td>
                                    <td>
                                        <div class="number">{{item.RecipeName}}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="left-title">Update Time</div>
                                    </td>
                                    <td>
                                        <div class="number">{{new Date(item.ModifyTime).f("yyyy-MM-dd HH:mm:ss")}}</div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div v-bind:class="{'running': item.State == 0,'stop': item.State == 1,'wrong': item.State == 2}" v-on:click="showDetailDialog(item.tool_id, item.State)">
                            <a href="#" v-bind:class="{'status-bt': true,'running': item.State == 0,'stop': item.State == 1,'wrong': item.State == 2}">
                                <div>
                                    <h3>{{item.State == 2 ? item.AlarmDescription : item.StateDescription}}</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Detail Dialog -->
        <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="running" aria-hidden="true">
            <div style="top: 35%;" class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div v-bind:class="{ 'r-title': detailItem.State == 0, 'w-title':detailItem.State == 2 }">
                        <h4>{{detailItem.ToolName}}</h4>
                        <span>{{detailItem.AlarmDescription}}</span>
                    </div>
                    <table class="table">
                        <tbody>
                        <!-- running細項 -->
                        <tr>
                            <td>
                                <div class="left-title title-detail">Recipe</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.RecipeName}}</div>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">Production Count</div>
                            </td>

                            <td>
                                <div class="number number-detail">{{detailItem.Quantity}}</div>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">Work Thickness</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.WorkThickness}}</div>
                            </td>
                            <td>
                                <div class="number unit-detail">mm</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">Snap Off</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.SnapOff}}</div>
                            <td>
                                <div class="number unit-detail">mm</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">Print Times</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.PrintTimes}}</div>
                            </td>
                            <td>
                                <div class="number unit-detail">Times</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">Low Speed Down Height</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.LowSpeedDownHeight}}</div>
                            <td>
                                <div class="number unit-detail">mm</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">Low Speed Down Speed</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.LowSpeedDownSpeed}}</div>
                            <td>
                                <div class="number unit-detail">mm/sec</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">SQ Stroke Delay</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.SQStrokeDelay}}</div>

                            </td>
                            <td>
                                <div class="number unit-detail">sec</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">SQ Up Delay</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.SQUpDelay}}</div>
                            <td>
                                <div class="number unit-detail">sec</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">Table Down Delay</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.TableDownDelay}}</div>
                            <td>
                                <div class="number unit-detail">sec</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">Cleaning Times</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.CleaningTimes}}</div>
                            </td>
                            <td>
                                <div class="number unit-detail">Times</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">Chucks Times</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.ChucksTimes}}</div>
                            </td>
                            <td>
                                <div class="number unit-detail">Times</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">Screen Size</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.ScreenSize}}</div>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">SQ Start Position</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.SQStartPosition}}</div>
                            </td>
                            <td><div class="number unit-detail">mm</div></td>

                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">SQ End Position</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.SQEndPosition}}</div>

                            </td>
                            <td><div class="number unit-detail">mm</div></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">FB Start Position</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.FBStartPosition}}</div>
                            </td>
                            <td><div class="number unit-detail">mm</div></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">FB End Position</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.FBEndPosition}}</div>
                            </td>
                            <td><div class="number unit-detail">mm</div></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">SQ Stroke Speed</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.SQStrokeSpeed}}</div>
                            </td>
                            <td><div class="number unit-detail">mm/sec</div></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">FB Stroke Speed</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.FBStrokeSpeed}}</div>

                            </td>
                            <td><div class="number unit-detail">mm/sec</div></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">SQ Down Pressure</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.SQDownPressure}}</div>
                            </td>
                            <td><div class="number unit-detail">Mpa</div></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">FB Down Pressure</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.FBDownPressure}}</div>
                            </td>
                            <td><div class="number unit-detail">Mpa</div></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">SQ FB Up Pressure</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.SQFBUpPressure}}</div>
                            </td>
                            <td><div class="number unit-detail">Mpa</div></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">Screen ID</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.Screenid}}</div>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">Ink ID</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.Inkid}}</div>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">Alignment Pattern Number</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.AlignmentPatternNumber}}</div>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left-title title-detail">Alignment Pattern Name</div>
                            </td>
                            <td>
                                <div class="number number-detail">{{detailItem.AlignmentPatternName}}</div>
                            </td>
                            <td></td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="modal-footer">
                        <i v-bind:class="{ 'close-bt':true, 'close-g':detailItem.State == 0, 'fas':true, 'fa-times':true }" data-dismiss="modal">
                        </i>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    var app = "";
    export default {
        data(){
            return {
                detailId: 0,
                detailItem: {},
                datas: []
            }
        },
        methods: {
            showDetailDialog: function (toolId, state) {
                if (state !== 1) {
                    var items = app.datas.filter(function (obj) {
                        return obj.tool_id == toolId;
                    });

                    console.log(items);

                    if (items.length > 0 && items[0].State != 1) {
                        app.detailId = toolId;
                        app.detailItem = items[0];
                        $('#detailModal').modal();
                    };
                };
            }
        },
        mounted: function () {
            app = this;
            loadStatus();
            setInterval(loadStatus, 2500);
        }
    };

    function loadStatus() {
        axios.get('ApiListAllGroupByToolId')
            .then(function (response) {
                app.datas = response.data;
                console.log(app.datas);
                if (app.detailId != 0) {
                    var items = app.datas.filter(function (obj) {
                        return obj.ToolId == app.detailId;
                    });

                    if (items.length > 0) {
                        if (items[0].State == 1) {
                            // $('#detailModal').modal('hide');
                            app.detailId = 0;
                            app.detailItem = {};
                        } else {
                            app.detailItem = items[0];
                        }
                    }
                }
            })
            .catch(function (error) {

            });
    }
</script>
