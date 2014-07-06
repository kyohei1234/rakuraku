<div class="contents-wrapper">

  <div class="main-wrapper">
    <div class="main">
      <i class="fa fa-clock-o"></i>
      <div class="kousin-main">
        <div class="month-value"></div>
        <div class="month-unit">月</div>
        <div class="date-value"></div>
        <div class="date-unit">日</div>
        <div class="updated">更新！</div>
      </div>
    </div>
  </div>

  <div>以下のソースコードをコピーして貼り付けると、上の楽々更新くんを表示できます。</div>
  <div class="source">
    <?php echo htmlspecialchars(trim(
      '
      <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
      <div class="main-wrapper">
        <div class="main">
          <i class="fa fa-clock-o"></i>
          <div class="kousin-main">
            <div class="month-value"></div>
            <div class="month-unit">月</div>
            <div class="date-value"></div>
            <div class="date-unit">日</div>
            <div class="updated">更新！</div>
          </div>
        </div>
      </div>
      </div>
      '.
      "
        <script>
        $('.main').css({'font-size':'25px', 'display':'inline-block', 'padding':'0 15px', 'height':'50px', 'border': $border});
        $('.main-wrapper').css({'padding':'60px'});

        $('.kousin-main').css({'display':'inline-block', 'color': $font_color, 'font-family': $font_family'});
        $('.fa-clock-o').css({'vertical-align':'super', 'color': $clock_color, 'line-height':'50px', 'font-size':'27px'});
        $('.kousin-main div').css({'float':'left'});
        function Koushin()
        {
          this.year;
          this.month;
          this.date;
          this.day;
        }
        $(function() {
          var koushin = new Koushin();
          var localtime = new Date();
          koushin.year = localtime.getFullYear();
          koushin.month = localtime.getMonth() + 1;
          koushin.date = localtime.getDate();
          koushin.day = localtime.getDay();
          getLastWorkDate(koushin);
          $('.month-value').html(koushin.month);
          $('.date-value').html(koushin.date);

          console.log($('.month-value').css('all'));
        });
        function getLastWorkDate(koushin)
        {
          decrementDate(koushin);
          decrementMonth(koushin);
        }
        function decrementDate(koushin)
        {
          switch (koushin.day)
          {
            case 1:
              koushin.date -= 3;
              break;
            case 0:
              koushin.date -= 2;
              break;


            default:
              koushin.date -= 1;
              break;
          }
        }


        function decrementMonth(koushin)
        {
          if (koushin.date < 1)
          {
            koushin.month -= 1;
            if (koushin.month == 0)
            {
              koushin.month = 12;
            }
            koushin.date = numOfDays[isLeap(koushin.year)][koushin.month - 1] + koushin.date;
          }

        }
        function isLeap(year)
        {
          if (year % 4 ==0 && year % 100 != 0 || year % 400 == 0)
            return 1;
          return 0;
        }
        var numOfDays = new Array(2);
        numOfDays[0] = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        numOfDays[1] = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
      </script>
      ")) ?>

    </div>
  </div>



  <script>
    $('.main').css({'font-size':'25px', 'display':'inline-block', 'padding':'0 15px', 'height':'50px', 'border': '<?php echo $border ?>'});

    $('.main-wrapper').css({'padding':'60px'});

    $('.kousin-main').css({'display':'inline-block', 'color':'<?php echo $font_color ?>', 'font-family':'<?php echo $font_family ?>'});
    $('.fa-clock-o').css({'vertical-align':'super', 'color':'<?php echo $clock_color ?>', 'line-height':'50px', 'font-size':'27px'});


    $('.kousin-main div').css({'float':'left'});

    //更新日のクラス
    function Koushin()
    {
      this.year;
      this.month;
      this.date;
      this.day;
    }

    //jQueryで値を表示
    $(function() {
      var koushin = new Koushin();

      //今日の日付を取得
      var localtime = new Date();
      //年
      koushin.year = localtime.getFullYear();
      //月
      koushin.month = localtime.getMonth() + 1;
      //日
      koushin.date = localtime.getDate();
      //曜日
      koushin.day = localtime.getDay();

      //日付を最後の営業日に
      getLastWorkDate(koushin);



      //表示
      $('.month-value').html(koushin.month);
      $('.date-value').html(koushin.date);

      console.log($('.month-value').css('all'));
    });

    //最後の営業日をkoushinに格納する関数
    function getLastWorkDate(koushin)
    {
      //日数を減らす
      decrementDate(koushin);

      //月数を減らす
      decrementMonth(koushin);
    }

    //曜日に応じて日数を減らす関数
    function decrementDate(koushin)
    {
      switch (koushin.day)
      {
        //月曜の場合
        case 1:
          koushin.date -= 3;
          break;
        //日曜の場合
        case 0:
          koushin.date -= 2;
          break;

        //それ以外
        default:
          koushin.date -= 1;
          break;
      }
    }

    //月をまたがるときに月数を減らす関数
    function decrementMonth(koushin)
    {
      //日数が0以下になっていたら
      if (koushin.date < 1)
      {
        //月数を1減らす
        koushin.month -= 1;
        //1月だった場合は12月に
        if (koushin.month == 0)
        {
          koushin.month = 12;
        }
        //新しい日付を代入
        koushin.date = numOfDays[isLeap(koushin.year)][koushin.month - 1] + koushin.date;
      }

    }

    //閏年判定
    function isLeap(year)
    {
      if (year % 4 ==0 && year % 100 != 0 || year % 400 == 0)
        return 1;
      return 0;
    }

    //月の日数(1が閏年)
    var numOfDays = new Array(2);
    numOfDays[0] = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    numOfDays[1] = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];




  </script>
</body>

</html>