$counter++;

                    var positions = JSON.parse(localStorage.positions || "{}");
                    $(function () {
                        var d = $("[id='draggable"+$counter+"']").attr("id", function (i) {
                            return "draggable"+ $counter+ i;
                        });
                        $.each(positions, function (id, pos) {
                            $("#" + id).css(pos);
                        });
                    
                        d.draggable({
                            containment: "#containment-wrapper",
                            scroll: false,
                            stop: function (event, ui) {
                                positions[this.id] = ui.position;
                                localStorage.positions = JSON.stringify(positions);
                            }
                        });
                    });