@extends('adminPanel.layouts.app')

@section('content')
  

    <div class="pagetitle">
        <h1 style="float: left;">My Expenses</h1>
        <h1 style="float: right;">Dashboard</h1>
    </div>
    <br><br>
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Expense Categories</h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Category A',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Category B'
                        },
                        {
                          value: 735,
                          name: 'Category C'
                        },
                        {
                          value: 580,
                          name: 'Category D'
                        },
                        {
                          value: 484,
                          name: 'Category E'
                        },
                        {
                          value: 300,
                          name: 'Category F'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div>
        </div>
      </div>
    </section>

  
@endsection