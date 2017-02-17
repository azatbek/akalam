<div class="sidebar one_quarter">
  <!-- ################################################################################################ -->
  <h6>Lorem ipsum dolor</h6>
  <nav class="sdb_holder">
    <ul>
      <li><a href="#">Navigation - Level 1</a></li>
      <li><a href="#">Navigation - Level 1</a>
        <ul>
          <li><a href="#">Navigation - Level 2</a></li>
          <li><a href="#">Navigation - Level 2</a></li>
        </ul>
      </li>
      <li><a href="#">Navigation - Level 1</a>
        <ul>
          <li><a href="#">Navigation - Level 2</a></li>
          <li><a href="#">Navigation - Level 2</a>
            <ul>
              <li><a href="#">Navigation - Level 3</a></li>
              <li><a href="#">Navigation - Level 3</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="#">Navigation - Level 1</a></li>
    </ul>
  </nav>
  <div class="sdb_holder">
    <h6>{{trans('default.sidebar.best_lyrics')}}</h6>
    <ul>
      @foreach($lyrics as $item)
      <li>{{$item->title}}</li>
      @endforeach
    </ul>
  </div>
  <div class="sdb_holder">
    <article>
      <h6>Lorem ipsum dolor</h6>
      <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
      <ul>
        <li><a href="#">Lorem ipsum dolor sit</a></li>
        <li>Etiam vel sapien et</li>
        <li><a href="#">Etiam vel sapien et</a></li>
      </ul>
      <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
      <p class="more"><a href="#">Continue Reading &raquo;</a></p>
    </article>
  </div>
  <!-- ################################################################################################ -->
</div>
