
                    var positions = JSON.parse(localStorage.positions || "{}");
                    $(function () {
                        var d = $("[id='draggable']").attr("id", function (i) {
                            return "draggable" + i;
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
                    var positions = JSON.parse(localStorage.positions || "{}");
                    $(function () {
                        var d = $("[id='draggable2']").attr("id", function (i) {
                            return "draggable2" + i;
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
                    var positions = JSON.parse(localStorage.positions || "{}");
                    $(function () {
                        var d = $("[id='draggable3']").attr("id", function (i) {
                            return "draggable3" + i;
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
                    var positions = JSON.parse(localStorage.positions || "{}");
                    $(function () {
                        var d = $("[id='draggable4']").attr("id", function (i) {
                            return "draggable4" + i;
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
                    var positions = JSON.parse(localStorage.positions || "{}");
                    $(function () {
                        var d = $("[id='draggable5']").attr("id", function (i) {
                            return "draggable5" + i;
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
                    var positions = JSON.parse(localStorage.positions || "{}");
                    $(function () {
                        var d = $("[id='draggable6']").attr("id", function (i) {
                            return "draggable6" + i;
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
                    var positions = JSON.parse(localStorage.positions || "{}");
                    $(function () {
                        var d = $("[id='draggable7']").attr("id", function (i) {
                            return "draggable7" + i;
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
                    var positions = JSON.parse(localStorage.positions || "{}");
                    $(function () {
                        var d = $("[id='draggable8']").attr("id", function (i) {
                            return "draggable8" + i;
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
                    $(function () {
                        var d = $("[id='block']").attr("id", function (i) {
                            return "block" + i;
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
                    
                    
                    
                    
                    