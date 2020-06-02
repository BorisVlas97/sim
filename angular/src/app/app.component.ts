import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  constructor(private http : HttpClient) { }

  title = 'Json file';

  content = [];
  p: number = 1;

  ngOnInit(){
    this.http.get('http://localhost:4200/api/json').subscribe((data : any[]) => {
      console.log(data);
      this.content = data;
    });
  }
}
