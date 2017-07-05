import { Component, NgModule } from '@angular/core';
import { NavService } from './services/nav.service';


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})

export class AppComponent {
  public appName: string;
  constructor(private _navService: NavService) {
    _navService.gettingAppName.subscribe(ms => {
      this.appName = ms;
    })
  }
}
