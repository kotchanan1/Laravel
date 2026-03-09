@extends('layout.layout')
@section('title', 'หน้าหลัก')
@section('About Me', 'เกี่ยวกับฉัน')
@section('content')
@section('subtitle', 'คำบรรยาย')

<h1>หน้า about </h1>
<div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        การศึกษา
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
        <strong>การศึกษา</strong> กำลังศึกษาอยู่ที่มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตสกลนคร คณะวิทยาศาสตร์เเละวิศวกรรมศาสตร์ สาขาวิศวกรรมคอมพิวเตอร์ ชั้นปีที่ 2
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        ประสบการณ์การทำงาน
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
      <div class="accordion-body">
        <strong>ประสบการณ์การทำงาน</strong> ทำงานที่บริษัทเอกชนแห่งหนึ่งในตำแหน่งนักพัฒนาซอฟต์แวร์ โดยมีหน้าที่รับผิดชอบในการพัฒนาและดูแลระบบซอฟต์แวร์ของบริษัท รวมถึงการแก้ไขปัญหาและปรับปรุงประสิทธิภาพของระบบอย่างต่อเนื่อง
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        ทักษะและความสนใจ
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
        <strong>ทักษะและความสนใจ</strong> สามารถทำงานได้ดีทั้งในทีมและเป็นผู้นำโครงการ สามารถใช้ภาษาโปรแกรมต่างๆ ได้ เช่น Python, Java, C++, และ JavaScript รวมถึงมีความสนใจในด้านการพัฒนาซอฟต์แวร์และเทคโนโลยีใหม่ๆ
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
{{--src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" จดที่ทำให้เปิดขึ้นลงได้--}}
@endsection

