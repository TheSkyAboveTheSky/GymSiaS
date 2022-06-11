@extends("adminlte::page")
@section('content')
<div class="container gym-feature py-5">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="font-weight-bold">GymSias: Planning</h4>
        <h4 class="display-4 font-weight-bold">Working Hours and Class Time</h4>
    </div>
    <div class="tab-class col-md-20">
        <div class="tab-content">
            <div id="class-all" class="container tab-pane  active">
                <div class="table table-responsive">
                    <table class="table table-bordered table-lg m-4">
                        <thead class="bg-secondary text-white text-center">
                            <tr>
                                <th>Time</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                <td><h5>Yoga</h5>Said Mounji</td>
                                <td></td>
                                <td><h5>Renforcement Musculaire</h5>Hossame Torchi</td>
                                <td></td>
                                <td><h5>gym/Streching</h5>Zakaria Ziani</td>
                                <td></td>
                                <td><h5>Yoga</h5>Said Mounji</td>
                            </tr>
                            <tr>
                                <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                <td></td>
                                <td><h5>gym/Streching</h5>Zakaria Ziani</td>
                                <td></td>
                                <td><h5>Yoga</h5>Said Mounji</td>
                                <td></td>
                                <td><h5>Renforcement Musculaire</h5>Hossame Torchi</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                <td><h5>Renforcement Musculaire</h5>Hossame Torchi</td>
                                <td></td>
                                <td><h5>gym/Streching</h5>Zakaria Ziani</td>
                                <td></td>
                                <td><h5>Yoga</h5>Said Mounji</td>
                                <td></td>
                                <td><h5>Renforcement Musculaire</h5>Hossame Torchi</td>
                            </tr>
                            <tr>
                                <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                <td></td>
                                <td><h5>Yoga</h5>Said Mounji</td>
                                <td></td>
                                <td><h5>Renforcement Musculaire</h5>Hossame Torchi</td>
                                <td></td>
                                <td><h5>gym/Streching</h5>Zakaria Ziani</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
@endsection
