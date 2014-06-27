@extends('layouts.master')

@section('topcontent')
    <style>
        #container{
            margin:20px;
        }
    </style>
@stop

@section('content')
<div id='container'>
<div class="col-md-12">
    <h1 class="page-header">Ashley Falsario <small>Junior Software Developer</small></h1>
</div>

<div class="col-md-12">
    <table class="table table-striped table-hover ">
        <tbody>
            <tr class="warning">
                <th>Contact</th>
                <td>Ashley Falsario</td>
                <td>a_falsario@yahoo.com</td>
                <td>
                    <a href="http://linkedin.com/in/ashleyfalsario/">LinkedIn</a>
                    <br>
                    <a href="http://github.com/afalsario">GitHub</a>
                </td>
            </tr>

            <tr class="active">
                <th>Work Experience</th>
                <td>Aesthetician<br>Clarify</td>
                <td>May 2011 - Present</td>
                <td><a href="http://clarifysa.com">Clarify</a></td>
            </tr>

            <tr class="warning">
                <td></td>
                <td>Cashier<br>AAFES</td>
                <td>May 2009 - May 2011</td>
                <td><a href="http://aafes.com">AAFES</a></td>
            </tr>

            <tr class="active">
                <th>Education</th>
                <td>LAMP+J Software Development Bootcamp<br>Codeup</td>
                <td>May - July 2014</td>
                <td><a href="http://codeup.com">Codeup</a></td>
            </tr>

            <tr class="warning">
                <td></td>
                <td>Esthiology<br>Milan Institute of Cosmetology</td>
                <td>2011</td>
                <td><a href="http://www.milaninstitute.edu/campuses/milan-institute-of-cosmetology/san-antonio-windcrest-texas-campus/">Milan</a></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@stop
