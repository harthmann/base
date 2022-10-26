@extends('layouts.mainLayout')

@section('title')
<title>Laravel 9 with Vue JS2 and Vuetify</title>
@endsection

@section('content')
    <v-app>
        <v-main>
            <v-container>
                <welcome-component></welcome-component>
            </v-container>
        </v-main>
    </v-app>
@endsection