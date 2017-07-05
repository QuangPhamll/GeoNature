import { Component, OnInit, Inject } from '@angular/core';
import {APP_CONFIG , CONFIG, AppConfig} from 'conf/app.config';

@Component({
  selector: 'app-accueil',
  templateUrl: './accueil.component.html',
  styleUrls: ['./accueil.component.scss'],
  providers: [{ provide: APP_CONFIG, useValue: CONFIG }]
})
export class AccueilComponent implements OnInit {
  private appName: string;
  private welcomeMessage: string;

  constructor(@Inject(APP_CONFIG) private config: AppConfig) {
    this.appName =  config.appName;
    this.welcomeMessage = config.welcomeMessage;
    console.log(this.welcomeMessage);
  }

  ngOnInit() {
  }

}
