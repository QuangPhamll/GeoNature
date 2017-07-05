import { Component, OnInit, Inject } from '@angular/core';
import {APP_CONFIG , CONFIG, AppConfig} from 'conf/app.config';
import { NavService } from '../../services/nav.service';

@Component({
  selector: 'app-accueil',
  templateUrl: './accueil.component.html',
  styleUrls: ['./accueil.component.scss'],
  providers: [{ provide: APP_CONFIG, useValue: CONFIG }]
})
export class AccueilComponent implements OnInit {
  private appName: string;
  private welcomeMessage: string;
  private shortMessage: string;

  constructor(@Inject(APP_CONFIG) private config: AppConfig, private _navService: NavService) {
    _navService.setAppName('Accueil');
    this.appName =  config.appName;
    this.welcomeMessage = config.welcomeMessage;
    this.shortMessage = config.shortMessage;
  }

  ngOnInit() {
  }

}
