@extends('index')
@section('content')
<template v-if="menu==1">
    <Content></Content>
</template>
<template v-if="menu==2">
    <h1 class="viejo" v-bind:class="{menuSlidebar: activeMenuSlide}"
    > this menu opction 1</h1>

</template>


@endsection