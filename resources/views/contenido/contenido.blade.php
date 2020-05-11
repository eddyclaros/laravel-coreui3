@extends('welcome')
@section('contenido')
<template v-if="menu==0">
    <example-component></example-component>
</template>
<template v-if="menu==1">
    <menu1></menu1>
</template>
<template v-if="menu==2">
    <menu2></menu2>
</template>
<template v-if="menu==3">
    <menu3></menu3>
</template>
<template v-if="menu==4">
    <menu4></menu4>
</template>
@endsection