<div class="container">
  <div class="hero-wrapper">
    <div class="hero-title">
        <div class="content">
          <h2>Air, Sleep, Dream</h2>
          <p>Find and book great experiences</p>
        </div>
    </div>
    <div class="hero-search">
      <form method="GET" name="form" action="{{route('guest.search')}}">
        <input type="search" name="location" class="search-form" placeholder="Location" v-model="query" v-on:keydown="radiusSearch">
        <ul :class="dropdownResults ? 'main-dropdwon-active' : 'main-dropdown'">
          <li v-for="(item, index) in radiusResults">
            <a v-on:click="getPosition(index)">@{{item.address.freeformAddress}}, @{{item.address.countrySecondarySubdivision}}, @{{item.address.countrySubdivision}}</a>
          </li>
        </ul>
        <input type="date" class="search-form" placeholder="Check in">
        <input type="date" class="search-form" placeholder="Check out">
        <a href="{{route('guest.search', )}}">
          <button class="btn-full" type="submit" value="Submit">
            <svg width="15" height="15" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.31573 11.7811L2.04591 11.6098L1.31573 11.7811ZM1.31573 6.324L2.04591 6.49528L1.31573 6.324ZM16.7893 6.324L17.5195 6.15273L16.7893 6.324ZM16.7893 11.781L17.5195 11.9523L16.7893 11.781ZM11.781 16.7893L11.6098 16.0591L11.781 16.7893ZM6.324 16.7893L6.15273 17.5195L6.324 16.7893ZM6.324 1.31573L6.15272 0.585547L6.324 1.31573ZM11.781 1.31573L11.9523 0.585546L11.781 1.31573ZM18.4697 19.5303C18.7626 19.8232 19.2374 19.8232 19.5303 19.5303C19.8232 19.2374 19.8232 18.7626 19.5303 18.4697L18.4697 19.5303ZM2.04591 11.6098C1.65136 9.92777 1.65136 8.17728 2.04591 6.49528L0.585548 6.15272C0.138151 8.06004 0.138151 10.045 0.585548 11.9523L2.04591 11.6098ZM16.0591 6.49528C16.4537 8.17728 16.4537 9.92777 16.0591 11.6098L17.5195 11.9523C17.9669 10.045 17.9669 8.06004 17.5195 6.15273L16.0591 6.49528ZM11.6098 16.0591C9.92777 16.4537 8.17728 16.4537 6.49528 16.0591L6.15273 17.5195C8.06004 17.9669 10.045 17.9669 11.9523 17.5195L11.6098 16.0591ZM6.49528 2.04591C8.17728 1.65136 9.92777 1.65136 11.6098 2.04591L11.9523 0.585546C10.045 0.138151 8.06004 0.138151 6.15272 0.585547L6.49528 2.04591ZM6.49528 16.0591C4.28757 15.5413 2.56377 13.8175 2.04591 11.6098L0.585548 11.9523C1.23351 14.7147 3.39038 16.8715 6.15273 17.5195L6.49528 16.0591ZM11.9523 17.5195C14.7147 16.8715 16.8715 14.7147 17.5195 11.9523L16.0591 11.6098C15.5413 13.8175 13.8175 15.5413 11.6098 16.0591L11.9523 17.5195ZM11.6098 2.04591C13.8175 2.56377 15.5413 4.28757 16.0591 6.49528L17.5195 6.15273C16.8715 3.39037 14.7147 1.23351 11.9523 0.585546L11.6098 2.04591ZM6.15272 0.585547C3.39037 1.23351 1.23351 3.39037 0.585548 6.15272L2.04591 6.49528C2.56377 4.28756 4.28757 2.56377 6.49528 2.04591L6.15272 0.585547ZM14.8048 15.8655L18.4697 19.5303L19.5303 18.4697L15.8655 14.8048L14.8048 15.8655Z" fill="#fff"/>
            </svg>
            Search
          </button>
        </a>
      </form>   
    </div>
  </div>
</div>
