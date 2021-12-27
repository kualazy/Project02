@include ('layouts.back_end.head')
<body class="g-sidenav-show  bg-gray-100">
@include ('layouts.back_end.sideber')

@include ('layouts.back_end.header')
  
  
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
        </nav>
        
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <!--main content start-->
    
        
        

    <hr class="horizontal dark mt-0">
    <a href="{{ route('admin.addjob') }}" class="btn btn-primary">เพิ่มข้อมูล</a>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ลำดับ</th>
        <th>ชื่อ</th>
        <th>รูปภาพ</th>
        <th>แก้ไขข้อมูล</th>
        <th>ลบข้อมูล</th>

      </tr>
    </thead>
    <tbody>
      @foreach($jobs as $job)
      <tr>
        <td>{{ $job->id }}</td>
        <td>{{ $job->name }}</td>
        <td><img src="{{ $job->image }}" width="150px" alt=""></td>
        <td>
          <a href="{{ route('admin.job.edit', ['id' => $job->id]) }}" class="btn btn-warning">แก้ไขข้อมูล</a>
        </td>
        <td>
          <form action="{{ route('admin.job.delete', ['id' => $job->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">ลบข้อมูล</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</section>
</div>
</div>

</section>
</section>
<!--main content end-->
</section>

</body>

</html>