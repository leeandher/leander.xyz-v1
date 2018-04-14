<!DOCTYPE html>
<html>

  <?php
    $pageTitle = "__ARTICLE_TITLE__";
    $pageName = "post";
    require_once "/inc/header.php";
  ?>  


  <body>
    <!--NAVIGATION-->
    <?php require_once "/inc/navbar.html"; ?>

    <!--TITLE SECTION-->
    <div class="section dark" id="post-head">
      <div class="content">
        <div id="post-quote"> Nunc sed eleifend quam, non pharetra ante.</div>
      </div>
    </div>

    <!--RETURN SECTION-->
    <a class="text-small light" id="page-return" href="../index.html"><i class="fas fa-arrow-left"></i> Back to Archive</a>

    <!--POST SECTION-->
    <div class="section" id="post-content">
      <div class="content light">
        <div id="post-share">
          <a class="fab fa-facebook-f" href="#"></a>
          <a class="fab fa-twitter" href=""></a>
          <a class="fab fa-google-plus-g" href="#"></a>
          <a class="fab fa-linkedin-in" href="#"></a>
          <a class="fas fa-link"></a>
        </div>
        <div id="post-title">1 Lorem ipsum dolor sit amet</div>
        <div id="post-date">Lorem ipsum</div>
        <div id="post-text">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris fringilla tellus id est posuere, sed posuere purus mattis. In tincidunt id eros eu condimentum. In viverra id nibh sollicitudin dapibus. Aliquam erat volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In volutpat mauris tincidunt tellus lobortis sodales. Maecenas in elementum quam.</p>
          <p>Nam sodales, ex non convallis pellentesque, quam lacus dapibus libero, eu sodales nibh sapien in arcu. Aenean odio ante, lobortis in purus in, efficitur elementum nibh. Pellentesque et tellus dapibus, aliquet eros nec, gravida purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur dignissim justo a ipsum placerat, in gravida est rhoncus. Cras in nibh fermentum magna vehicula elementum nec in felis. Maecenas ac diam purus. Fusce vulputate posuere justo ac mollis. Vestibulum condimentum blandit urna, et placerat elit ultricies ac. Quisque eu erat ex. Praesent mollis vel eros nec consequat. Praesent id tempor velit, a elementum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
          <p>In ligula turpis, pulvinar eu aliquet vel, tincidunt at massa. Maecenas euismod erat eget metus cursus, eget scelerisque turpis suscipit. Donec pretium eros non congue auctor. Suspendisse eu dolor quis arcu efficitur tristique pulvinar vitae diam. Ut elementum tortor tortor, nec mollis orci condimentum eget. Vestibulum massa est, rhoncus egestas quam a, porttitor aliquet turpis. Nullam luctus, ante a egestas bibendum, orci justo aliquam arcu, id tincidunt est sapien id quam. Cras porta sem quis venenatis blandit. Aliquam maximus sapien non posuere auctor. Donec sapien nisi, congue vel ante vel, cursus convallis dui. Donec ultricies elit quis ultrices tristique. Aenean lacinia efficitur neque at luctus. Sed quis ipsum vel ipsum volutpat dapibus.</p>
          <p>Fusce quis lorem nec turpis sodales varius id sed dui. Curabitur sit amet ligula maximus, posuere mauris in, euismod turpis. Vivamus dolor risus, scelerisque et sapien id, molestie mattis risus. Morbi facilisis erat eget est luctus sollicitudin. Proin ultricies, libero non tempus facilisis, leo metus tincidunt magna, vitae dictum tellus augue et nunc. Integer commodo ligula ut turpis mollis porta. Proin fermentum at arcu eget elementum. Suspendisse aliquet metus vel nisl auctor eleifend. Suspendisse congue dapibus ex ut mollis. Suspendisse convallis tincidunt est ut blandit. Fusce sit amet gravida lacus. Aenean finibus interdum vulputate. Donec ut diam mi. Donec rutrum ultrices metus vel porttitor.</p>
          <p>Sed quis pulvinar sem, vitae hendrerit est. Ut sodales ipsum id libero mollis, at vehicula lacus imperdiet. Ut ultricies ex a metus facilisis vulputate. Etiam auctor sodales cursus. Morbi tincidunt pharetra lacus, eget tincidunt ligula pharetra vel. Nullam nec pharetra felis. Nullam viverra dapibus mauris finibus imperdiet. Aliquam in quam nec sem lacinia tempus in et magna. Pellentesque ac turpis augue. Integer ultricies, magna vel fringilla varius, velit tellus congue justo, nec blandit felis tellus eget nunc. Ut tempor, lectus nec viverra fermentum, dui enim consequat orci, ut placerat magna arcu ac justo. Nam ornare malesuada nisl eget iaculis. Aenean finibus venenatis commodo. Nullam eget malesuada ante.</p>
        </div>
        <div id="post-tags">
          <span class="round">technology</span>
          <span class="round">project</span>
          <span class="round">coding</span>
          <span class="round">announcement</span>
          <span class="round">games</span>
        </div>
      </div>
    </div>

    <!--FOOTER SECTION-->
    <?php require_once "/inc/footer.php"; ?>

  </body>

</html>
