<x-weather-layout title="Head First Design Patterns: Chapter 2 - Observer Pattern">
    <ul class="flex flex-col gap-2">
        <li><a href="{{ route('weather.current-conditions') }}">Current Weather Conditions</a></li>
        <li><a href="{{ route('weather.forecast') }}">Weather Forecast</a></li>
        <li><a href="{{ route('weather.heat-index') }}">Heat Index</a></li>
        <li><a href="{{ route('weather.statistics') }}">Weather Statistics</a></li>
    </ul>
</x-weather-layout>
