@extends('layouts.default')
@section('title', 'Timetable || Mediplace || Mediplace Laravel Template')


@section('content')

    <x-page-header pageTitle='Timetable' pageSubtitle='Timetable' />

    <!--Doctor Visiting Timetable Start-->
    <section class="doctor-visiting-timetable">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="icon-pharmacy"></span>
                    <p class="section-title__tagline">Appointment Management</p>
                </div>
                <h2 class="section-title__title title-animation">Doctors’ Time Table <span>and Scheduling</span>
                </h2>
            </div>
            <div class="doctor-visiting-timetable-wrapper">
                <table class="table doctor-visiting-timetable-box">
                    <thead>
                        <tr>
                            <th>
                                <p>Depeartment</p>
                            </th>
                            <th>
                                <p>Monday</p>
                            </th>
                            <th>
                                <p>Tuesday</p>
                            </th>
                            <th>
                                <p>Wednesday</p>
                            </th>
                            <th>
                                <p>Thursday</p>
                            </th>
                            <th>
                                <p>Friday</p>
                            </th>
                            <th>
                                <p>Saturday</p>
                            </th>
                            <th>
                                <p>Sunday</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Medecine and Health</h4>
                                    <p>(10:30am - 3:00pm)</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. John Smith</h4>
                                    <p>Internal Medicine</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Michael Johnson</h4>
                                    <p>General Medicine</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Emily Brown</h4>
                                    <p>Cardiology</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. David Wilson</h4>
                                    <p>Endocrinology</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Sarah Miller</h4>
                                    <p>Medicine Specialist</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Robert Davis</h4>
                                    <p>Gastroenterology</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Laura Anderson</h4>
                                    <p>Emergency Medicine</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Eye Care</h4>
                                    <p>(10:30am - 3:00pm)</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. James Carter</h4>
                                    <p>Ophthalmology</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Olivia Moore</h4>
                                    <p>Eye Specialist</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. William Taylor</h4>
                                    <p>Retina Specialist</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Sophia Anderson</h4>
                                    <p>Pediatric Ophthalmology</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Daniel Thomas</h4>
                                    <p>Glaucoma Specialist</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Emma White</h4>
                                    <p>Cornea Specialist</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Benjamin Harris</h4>
                                    <p>Emergency Eye Care</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dental</h4>
                                    <p>(10:30am - 3:00pm)</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Mark Thompson</h4>
                                    <p>General Dentistry</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Jessica Lee</h4>
                                    <p>Cosmetic Dentistry</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Andrew Walker</h4>
                                    <p>Orthodontics</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Amanda Lewis</h4>
                                    <p>Pediatric Dentistry</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Brian Hall</h4>
                                    <p>Oral & Maxillofacial Surgery</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Rachel Young</h4>
                                    <p>Periodontics</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Kevin Martinez</h4>
                                    <p>Emergency Dental Care</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Pregnancy and Health</h4>
                                    <p>(10:30am - 3:00pm)</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. John Smith</h4>
                                    <p>Internal Medicine</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Michael Johnson</h4>
                                    <p>General Medicine</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Emily Brown</h4>
                                    <p>Cardiology</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. David Wilson</h4>
                                    <p>Endocrinology</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Sarah Miller</h4>
                                    <p>Medicine Specialist</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Robert Davis</h4>
                                    <p>Gastroenterology</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Laura Anderson</h4>
                                    <p>Emergency Medicine</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Children</h4>
                                    <p>(10:30am - 3:00pm)</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Mark Thompson</h4>
                                    <p>General Dentistry</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Jessica Lee</h4>
                                    <p>Cosmetic Dentistry</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Andrew Walker</h4>
                                    <p>Orthodontics</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Amanda Lewis</h4>
                                    <p>Pediatric Dentistry</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Brian Hall</h4>
                                    <p>Oral & Maxillofacial Surgery</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Rachel Young</h4>
                                    <p>Periodontics</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Kevin Martinez</h4>
                                    <p>Emergency Dental Care</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Heart</h4>
                                    <p>(10:30am - 3:00pm)</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. James Carter</h4>
                                    <p>Ophthalmology</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Olivia Moore</h4>
                                    <p>Eye Specialist</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. William Taylor</h4>
                                    <p>Retina Specialist</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Sophia Anderson</h4>
                                    <p>Pediatric Ophthalmology</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Daniel Thomas</h4>
                                    <p>Glaucoma Specialist</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Emma White</h4>
                                    <p>Cornea Specialist</p>
                                </div>
                            </td>
                            <td>
                                <div class="dr-department-box">
                                    <h4>Dr. Benjamin Harris</h4>
                                    <p>Emergency Eye Care</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--Doctor Visiting Timetable End-->

@endsection
