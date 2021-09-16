@extends('dashboard.layout.master')

@section('section')


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
  <!--begin::Subheader-->

  <!--end::Subheader-->
  <!--begin::Entry-->
  <div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
      <!--begin::Dashboard-->
      <h1 style="text-align: center;">This is CSE299 Project details. Please chose the page from sidebar and view the pages</h1><br><br><br>
      <h3 style="text-align: center;">About project:</h3><br>
      <h2 style="text-align: center;">North South University</h2><br>
      <h3 style="text-align: center;">Department of Eletrical & Computer Engineering</h3><br>
      <h2 style="text-align: center;">Project Name : Guinea pig- A point of sale</h2><br>
      <h2 style="text-align: center;">Faculty Name: Nabeel Mohammad (Nbm)</h2><br>
      <h3 style="text-align: center;">CSE299</h3>
      <h4 style="text-align: center;">Group: Undefined</h4>
      <h4 style="text-align: center;">Section: 04</h4>
      <h4 style="text-align: center;">Semester: Spring 2020 </h4><br><br>
      <h4 style="">contributors</h4>
      <table class="table table-bordered table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">ID</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <th scope="row">2</th>
            <td>Barkatullah Hossain</td>
            <td>1530642642</td>
            <td>barkat.ullah@northsouth.edu</td>
        </tr>

        <tr>
            <th scope="row">3</th>
            <td>MD. Zakaria</td>
            <td>1430604042</td>
            <td>md.zakaria@northsouth.edu</td>
        </tr>
      </tbody>
    </table><br><br>
      <h5 style="">ABSTRACT</h5>
      <h6 style="">This report comprises some experiences, which were made during the development of a point of sale (POS) system. Specific about the project is the fact that it started as an attempt to develop customizable standard software, and then was restructured to deliver a unique project solution. This report details the situation before and after the restructuring, and discusses the experiences made through the ongoing development. These experiences relate mostly to three areas, which are: software project management, prototyping, and testing.
      </h6><br><br>
      <div class="example-preview" style="text-align: center;">
          <p>
              <a href="" class="btn btn-primary">
                  <i class="fab fa-github"></i>
                  Github
              </a>
              <a href="" class="btn btn-success">
                  <i class="fab fa-trello"></i>
                  Trello board
              </a>
              <a href="https://github.com/bhsam787/newPos.git" class="btn btn-danger">
                  <i class="fab fa-slack"></i>
                  Slack
              </a>
              <a href="https://www.facebook.com/sam787/" class="btn btn-warning ">
                  <i class="fab fa-facebook"></i>
                  Facebook
              </a>
              <a href="https://www.linkedin.com/in/maruf-billah-0699241aa/" class="btn btn-success">
                  <i class="fab fa-linkedin"></i>
                  Linkedin
              </a>
          </p>
      </div>













      <!--begin::Row-->

      <!--end::Row-->
      <!--begin::Row-->

      <!--end::Row-->
      <!--end::Dashboard-->
    </div>
    <!--end::Container-->
  </div>
  <!--end::Entry-->
</div>
@endsection
