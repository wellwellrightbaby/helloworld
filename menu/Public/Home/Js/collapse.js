//轮播
    var Rotation=function($div1,$div2){
        this.$list1=$div1.children();
        this.$list2=$div2.children();
        //timer
        this.timeOut=null;
        //初始化
        this._start();
    }
    Rotation.prototype={
        //页面初始化
        _init:function(){
            this.$list1.hide()
                    .eq(0).show().css("z-index","1").addClass("show")
            this.$list2.eq(0).addClass('hover');
        },
        _start:function(){
            var _this=this;
            _this._init();
            _this._startTimeOut();
            _this._addClickEvent(_this.$list2);
            _this.$list1.hover(function(){
                _this._stopTimeOut();
            },function(){
                _this._startTimeOut();
            });
        },
        _addClickEvent:function($div){
            var _this=this;
            $div.on("click",function(){
                _this._stopTimeOut();
                _this.$list1.stop(true,true);
                _this._doNext($(this).index());
            });
        },
        _doNext:function(index){
            var _this=this;
            var num=_this.$list2.siblings(".hover").index();
            _this.$list2.eq(index).addClass("hover")
                    .siblings().removeClass("hover");
            if(num!=index){
                _this.$list1.eq(index).show().addClass("show").end()
                        .eq(num).removeClass("show").fadeOut(900,function(){
                    _this.$list1.eq(index).css("z-index","1").end()
                            .eq(num).css("z-index","0");
                });
            }
        },
        _startTimeOut:function(){
            var _this=this;
            var indexNum=_this.$list2.siblings(".hover").index();
            timeOut=setInterval(function(){
                indexNum++;
                _this._doNext(indexNum%(_this.$list1.length));
            },3000);
        },
        _stopTimeOut:function(){
            clearInterval(timeOut);
        }
    }


