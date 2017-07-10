import { Component, OnInit, Inject } from '@angular/core';
import {APP_CONFIG , CONFIG, AppConfig} from 'conf/app.config';
import { NavService } from '../../services/nav.service';
import { MapService } from '../../services/map.service';
import { CarouselConfig } from 'ngx-bootstrap/carousel';

@Component({
  selector: 'app-accueil',
  templateUrl: './accueil.component.html',
  styleUrls: ['./accueil.component.scss'],
  providers: [MapService, { provide: APP_CONFIG, useValue: CONFIG }, {provide: CarouselConfig, useValue: {interval: 4000, noPause: true}}]
})
export class AccueilComponent implements OnInit {
  private appName: string;
  private welcomeMessage: string;
  private shortMessage: string;

  // test chartjs
  type1 = 'line';
  type2 = 'bar';
  type3 = 'radar';
  type4 = 'polarArea';
  data = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
    datasets: [
      {
        label: 'My First dataset',
        data: [6, 2, 5, 1, 5, 6],
        borderColor: 'rgba(255, 159, 64, 1)',
        backgroundColor: 'rgba(255, 159, 64, 0.2)',
      }, {
        label: 'My Second dataset',
        borderColor: 'rgba(255,99,132,1)',
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
          data: [1, 5, 2, 6, 6, 1],
        }, {
          label: 'My Third dataset',
          borderColor: 'rgba(54, 162, 235, 1)',
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          data: [7, 5, 6, 4, 2, 1],
        }, {
          label: 'My Four dataset',
          borderColor: 'rgba(75, 192, 192, 1)',
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          data: [8, 9, 5, 5, 4, 3],
        }],
      }
  options = {
    scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }

  constructor(private mapService: MapService, @Inject(APP_CONFIG) private config: AppConfig, private _navService: NavService) {
    _navService.setAppName('Accueil');
    this.appName =  config.appName;
    this.welcomeMessage = config.welcomeMessage;
    this.shortMessage = config.shortMessage;
  }

  ngOnInit() {
  }

}
