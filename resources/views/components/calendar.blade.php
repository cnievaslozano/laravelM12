<div class="calendar" id="calendar-app">
    <div class="calendar--day-view" id="day-view">
        <span class="day-view-exit" id="day-view-exit">&times;</span>
        <span class="day-view-date" id="day-view-date">{{ __('MAY') }} {{ __('29') }} {{ __('2016') }}</span>
        <div class="day-view-content">
            <div class="day-highlight">
                {{ __('You') }} <span class="day-events" id="day-events">{{ __('had') }} {{ __('no') }}
                    {{ __('events') }} {{ __('for') }} {{ __('today') }}.</span> &nbsp; <span tabindex="0"
                    onkeyup="if(event.keyCode != 13) return; this.click();" class="day-events-link" id="add-event"
                    data-date>{{ __('Add') }} {{ __('a') }} {{ __('new') }} {{ __('event?') }}</span>
            </div>
            <div class="day-add-event" id="add-day-event-box" data-active="false">
                <div class="row">
                    <div class="half">
                        <label class="add-event-label">
                            {{ __('Name') }} {{ __('of') }} {{ __('event') }}
                            <input type="text" class="add-event-edit add-event-edit--long"
                                placeholder="{{ __('New') }} {{ __('event') }}" id="input-add-event-name">

                        </label>
                    </div>
                    <div class="qtr">
                        <label class="add-event-label">
                            {{ __('Start') }} {{ __('Time') }}
                            <input type="text" class="add-event-edit" placeholder="{{ __('8:15') }}"
                                id="input-add-event-start-time" data-options="1,2,3,4,5,6,7,8,9,10,11,12"
                                data-format="datetime">
                            <input type="text" class="add-event-edit" placeholder="{{ __('am') }}"
                                id="input-add-event-start-ampm" data-options="a,p,am,pm">
                        </label>
                    </div>
                    <div class="qtr">
                        <label class "add-event-label">
                            {{ __('End') }} {{ __('Time') }}
                            <input type="text" class="add-event-edit" placeholder="{{ __('9') }}"
                                id="input-add-event-end-time" data-options="1,2,3,4,5,6,7,8,9,10,11,12"
                                data-format="datetime">
                            <input type="text" class="add-event-edit" placeholder="{{ __('am') }}"
                                id="input-add-event-end-ampm" data-options="a,p,am,pm">
                        </label>
                    </div>
                    <div class="half">
                        <a onkeyup="if(event.keyCode != 13) return; this.click();" tabindex="0" id="add-event-save"
                            class="event-btn--save event-btn">{{ __('save') }}</a>
                        <a tabindex="0" id="add-event-cancel"
                            class="event-btn--cancel event-btn">{{ __('cancel') }}</a>
                    </div>
                </div>

            </div>
            <div id="day-events-list" class="day-events-list">

            </div>
            <div class="day-inspiration-quote" id="inspirational-quote">
                {{ __('Every') }} {{ __('child') }} {{ __('is') }} {{ __('an') }}
                {{ __('artist') }}. {{ __('The') }} {{ __('problem') }} {{ __('is') }}
                {{ __('how') }} {{ __('to') }} {{ __('remain') }} {{ __('an') }} {{ __('artist') }}
                {{ __('once') }} {{ __('he') }} {{ __('grows') }} {{ __('up') }}.
                {{ __('–Pablo') }} {{ __('Picasso') }}
            </div>
        </div>
    </div>
    <div class="calendar--view" id="calendar-view">
        <div class="cview__month">
            <span class="cview__month-last" id="calendar-month-last">{{ __('Apr') }}</span>
            <span class="cview__month-current" id="calendar-month">{{ __('May') }}</span>
            <span class="cview__month-next" id="calendar-month-next">{{ __('Jun') }}</span>
        </div>
        <div class="cview__header">{{ __('Sun') }}</div>
        <div class="cview__header">{{ __('Mon') }}</div>
        <div class="cview__header">{{ __('Tue') }}</div>
        <div class="cview__header">{{ __('Wed') }}</div>
        <div class="cview__header">{{ __('Thu') }}</div>
        <div class="cview__header">{{ __('Fri') }}</div>
        <div class="cview__header">{{ __('Sat') }}</div>
        <div class="calendar--view" id="dates">
        </div>
    </div>
    <div class="footer">
        <span><span id="footer-date" class="footer__link">{{ __('Today') }} {{ __('is') }} {{ __('May') }}
                {{ __('30') }}</span></span>
    </div>
</div>
<div class="calendar" id="calendar-app">
    <div class="calendar--day-view" id="day-view">
        <span class="day-view-exit" id="day-view-exit">&times;</span>
        <span class="day-view-date" id="day-view-date">{{ __('MAY') }} {{ __('29') }}
            {{ __('2016') }}</span>
        <div class="day-view-content">
            <div class="day-highlight">
                {{ __('You') }} <span class="day-events" id="day-events">{{ __('had') }} {{ __('no') }}
                    {{ __('events') }} {{ __('for') }} {{ __('today') }}.</span> &nbsp; <span tabindex="0"
                    onkeyup="if(event.keyCode != 13) return; this.click();" class="day-events-link" id="add-event"
                    data-date>{{ __('Add') }} {{ __('a') }} {{ __('new') }} {{ __('event?') }}</span>
            </div>
            <div class "day-add-event" id="add-day-event-box" data-active="false">
                <div class="row">
                    <div class="half">
                        <label class="add-event-label">
                            {{ __('Name') }} {{ __('of') }} {{ __('event') }}
                            <input type="text" class="add-event-edit add-event-edit--long"
                                placeholder="{{ __('New') }} {{ __('event') }}" id="input-add-event-name">

                        </label>
                    </div>
                    <div class="qtr">
                        <label class="add-event-label">
                            {{ __('Start') }} {{ __('Time') }}
                            <input type="text" class="add-event-edit" placeholder="{{ __('8:15') }}"
                                id="input-add-event-start-time" data-options="1,2,3,4,5,6,7,8,9,10,11,12" data-format="
